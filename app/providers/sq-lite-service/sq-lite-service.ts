import {Injectable} from '@angular/core';
import {Http} from '@angular/http';
import {Platform} from 'ionic-angular';
import 'rxjs/add/operator/map';

//declare outside modules to keep typescript happy
declare var sql:any;

@Injectable()
export class SqLiteService {
  data:any = null;
  platform:Platform;
  window:any;
  db:any;
  cachedQueries:any;
  jsonData:any = null;

  constructor(public http:Http, platform:Platform) {
    this.platform = platform;
    this.cachedQueries = {}
  }

  loadDatabase() {
    return new Promise((resolve, reject) => {
      //use sql.js package if working in browser
      var sql = window.SQL;
      var xhr = new XMLHttpRequest();
      xhr.open('GET', 'proinpa.db', true);
      xhr.responseType = 'arraybuffer';
      xhr.onload = function (e) {
        var uInt8Array = new Uint8Array(this.response);
        this.db = new sql.Database(uInt8Array);
        console.log('SQl db loaded successfully');
        resolve(true);
      };
      xhr.send();
    })
  }

  /*sql query async so using promises*/
  query(queryName, queryType = "static", par1 = "", par2 = "", par3 = "") {
    return new Promise((resolve, reject) => {
      //first try local cache
      if(this.jsonData[queryName]!=undefined){
        console.log('loading cached data for: '+queryName)
        resolve(this.jsonData[queryName])
      }
      //if doesn't exist, find and execute query:
      else{
        console.log('no cached data, running sql query')
        var queryText;
        //Unless specified, query is 'static'.  Just find the named query using getQueries().
        if(queryType=="static") {
          queryText=this.getQueries(queryName)
        }
        //If a different type is specified, the query is 'dynamic'.
        //At present, the only dynamic query type is a filter query, so use getFilterQuery() to generate the queryText.
        else{
          queryText=getFilterQuery(par1, par2, par3)
        }
        //Then run the code below to execute the queryText.
        console.log(queryText)
        var sql = window.SQL;
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'proinpa.db', true);
        xhr.responseType = 'arraybuffer';
        xhr.onload = function () {
          var uInt8Array = new Uint8Array(this.response);
          this.db = new sql.Database(uInt8Array);
          var contents = this.db.exec(queryText);
          console.log(contents)
          //Added if statement to handle case where query returns an empty set.
          //convertToRowFormat() was breaking when contents[0] was undefined, so skip it if contents.length == 0.
          if(contents.length>0){
            var rowContents = convertToRowFormat(contents[0]);
            resolve(rowContents)
          }
          else {
            resolve(contents);
          }
        };
        xhr.send();
      }
    });
  }

  setValue(key, value) {
    this[key] = value;
  }

  getValue(key) {
    return this[key]
  }

  getQueries(name) {
    console.log('getting query by name: ' + name);
    return masterQueries[name];
  }

  getAllQueries() {
    return masterQueries;
  }

  getAllQueriesLength() {
    return Object.keys(masterQueries).length;
  }

  loadFromJson(){
    if (this.jsonData) {
      return Promise.resolve(this.data);
    }
    return new Promise(resolve => {
      this.http.get('cachedQueries.json')
          .map(res => res.json())
          .subscribe(data => {
            this.jsonData = data;
            resolve(this.jsonData);
          });
    });
  }

  //function to filter all jsonData to only that which contains stageId, seperated by info section (e.g. disease, pest)
  //used to prepopulate badge info, can later be used as filter when working with json data
  filterAllByStage(stageId){
    var stageResults={};
    for (let infoTitle of infoMapping){
      var filtered = 'no cached json data';
     if(this.jsonData[infoTitle.masterQuery]!=undefined){
       var filtered = filterByStage(this.jsonData[infoTitle.masterQuery],stageId)
     }
      stageResults[infoTitle.name]=filtered
    }
    console.log(stageResults)
    return stageResults
  }

  //attempt at writing generic filter, to allow filtering of any complete set by any list.  (stageList, abioticList etc)
  filterByList(set,list,filterId) {
    var results = [];
      for (let item of set){
        var contains=false;
        if(item[list]!=null) {
          var listArray=item[list].split(',');
          for (let e of listArray){
            if (parseInt(e)==filterId){
              contains=true;
            }
          }
          if(contains==true){
            results.push(item)
          }
      }
      }
      return(results)
  }

  //function to return lists from masterData
  getInputs(inputList){
    console.log('input list: '+inputList)
    var inputMeta=[];
    if(inputList!=null){
      inputList=inputList.split(',');
      for (let inputId of inputList){
        for (let allInput of this.jsonData.allInputs){
          if(allInput.input_id==inputId){
            inputMeta.push(allInput)
          }
        }
      }
      console.log(inputMeta);
    }
    else{console.log('no inputs associated')}
    return inputMeta;
  }

  getInputVendors(inputId){
    var allVendors=this.getValue('allVendors')
    console.log(allVendors);
    var vendorsArray={has:[],hasnt:[]}
    for(let vendor of allVendors){
      if(vendor.inputList) {
        var inputsArray = vendor.inputList.split(",");
        if (inputsArray.indexOf(inputId.toString()) >= 0) {
          vendorsArray.has.push(vendor)
        }
      }
      else{vendorsArray.hasnt.push(vendor)}
    }
    console.log(vendorsArray);
    return vendorsArray;
  }

}

function convertToRowFormat(contents) {
  var rowArray = [];
  var columns = contents.columns;
  for (var value of contents.values) {
    var temp = {};
    for (var i = 0; i < columns.length; i++) {
      temp[columns[i]] = value[i]
    }
    rowArray.push(temp)
  }
  return rowArray
}

function getFilterQuery(tbl, filter, filterId) {
  //function has 3 parameters:
  // - tbl:  the main table to query;
  // - filter:  the linked table to use as a filter;
  // - filterId:  the ID value to filter by.
  // eg: to return all pests that are linked to stage ID 1:  tbl='pest'; filter='stage'; filterId=1.
  var idLabel;
  //There is some silly inconcistent pluralisations in the names of tables and variables within the database.
  //..
  //Switch statement written to overcome these inconsitancies.
  switch(tbl) {
    case "inputs":
      idLabel = "input";
    break;
    case "pests":
      idLabel = "pest";
    break;
    default:
      idLabel = tbl;
  }
  //janky bit about junction-table naming conventions: will fix later:
  if(
    (idLabel=='input' && filter=='crop') ||
    (idLabel=='input' && filter=='function') ||
    (idLabel=='input' && filter=='possibilities') ||
    (idLabel=='possibilities' && filter=='abioticos') ||
    (idLabel=='possibilities' && filter=='disease') ||
    (idLabel=='possibilities' && filter=='pest') ||
    (idLabel=='possibilities' && filter=='stage') ||
    (idLabel=='stage' && filter=='abioticos') ||
    (idLabel=='stage' && filter=='disease') ||
    (idLabel=='stage' && filter=='pest') ||
    (idLabel=='vendor' && filter=='input') ||
    (idLabel=='vendor' && filter=='variety') )
 {
    var query = "SELECT `a`.*, `b`.`file_url` \
    FROM `" + tbl + "` a \
    LEFT JOIN `media_" + tbl + "` b ON a.`" + idLabel + "_id` = b.`" + idLabel + "_id` \
    LEFT JOIN ( \
            SELECT `" + idLabel + "_id`, MIN(`file_url`) 'firstfile', `file_type` \
            FROM `media_" + tbl + "` \
            GROUP BY `" + idLabel + "_id` \
        ) c ON a.`" + idLabel + "_id` = b.`" + idLabel + "_id` AND \
      b.`file_url` = c.`firstfile` \
      INNER JOIN `jnc_" + idLabel + "_" + filter +"` d \
      ON a.`" + idLabel + "_id` = d.`" + idLabel + "_id` \
      WHERE `d`.`" + filter + "_id` = " + filterId + "\
      GROUP BY a.`" + idLabel + "_id` \
      ORDER BY a.`" + idLabel + "_id`";
  }
  else {
  //Build the query.
    var query = "SELECT `a`.*, `b`.`file_url` \
    FROM `" + tbl + "` a \
    LEFT JOIN `media_" + tbl + "` b ON a.`" + idLabel + "_id` = b.`" + idLabel + "_id` \
    LEFT JOIN ( \
            SELECT `" + idLabel + "_id`, MIN(`file_url`) 'firstfile', `file_type` \
            FROM `media_" + tbl + "` \
            GROUP BY `" + idLabel + "_id` \
        ) c ON a.`" + idLabel + "_id` = b.`" + idLabel + "_id` AND \
      b.`file_url` = c.`firstfile` \
      INNER JOIN `jnc_" + filter + "_" + idLabel +"` d \
      ON a.`" + idLabel + "_id` = d.`" + idLabel + "_id` \
      WHERE `d`.`" + filter + "_id` = " + filterId + "\
      GROUP BY a.`" + idLabel + "_id` \
      ORDER BY a.`" + idLabel + "_id`";
  }
  return query;
}

//slightly messy function to take json object containing stageList string and determine whether includes a specific stage id
function filterByStage(data,stageId){
  var resultsArray=[];
  if(data[0].stageList!=undefined){
    for (let item of data){
      var containsStage=false;
      var stageArray=item.stageList.split(',');
      for (let e of stageArray){
        if (parseInt(e)==stageId){containsStage=true;}
      }
      if(containsStage==true){resultsArray.push(item)}
    }
    return(resultsArray)
  }
  else return 'no stageList found'
}

//Mapping stage ids to names
var stageMapping=[
  {id:1,name:"Siembra",masterQuery:'null'},
  {id:2,name:"Emergencia",masterQuery:'null'},
  {id:3,name:"Panojamiento",masterQuery:'null'},
  {id:4,name:"Floración",masterQuery:'null'},
  {id:5,name:"Grano",masterQuery:'null'},
  {id:6,name:"Cosecha",masterQuery:'null'},
  {id:7,name:"Comercialización",masterQuery:'null'}
    ];

var infoMapping=[
  {id:1,name:'possibilities',masterQuery:'allPossibilities'},
  {id:2,name:'abiotics',masterQuery:'allAbioticos'},
  {id:3,name:'diseases',masterQuery:'allDiseases'},
  {id:4,name:'pests',masterQuery:'allPests'},
  {id:5,name:'varieties',masterQuery:'allVarieties'},
];

//queries to be executed within the app
var masterQueries=
{
  allStages: "  \
  SELECT `a`.*, `b`.`file_url`  \
  FROM `stage` a  \
  LEFT JOIN `media_stage` b \
  ON a.`stage_id` = b.`stage_id`  \
  LEFT JOIN (  \
    SELECT `stage_id`, MIN(`file_url`) 'firstfile', `file_type` \
    FROM `media_stage`  \
    GROUP BY `stage_id` \
  ) c \
      ON a.`stage_id` = b.`stage_id`  \
      AND b.`file_url` = c.`firstfile`  \
      GROUP BY a.`stage_id` \
      ORDER BY a.`stage_id`",

  allAbioticos: " \
  SELECT `a`.*, `b`.`file_url`, GROUP_CONCAT(DISTINCT d.`stage_id`) 'stageList' \
  FROM `abioticos` a \
  LEFT JOIN `media_abioticos` b \
  ON a.`abioticos_id` = b.`abioticos_id` \
  LEFT JOIN ( \
    SELECT `abioticos_id`, MIN(`file_url`) 'firstfile', `file_type` \
    FROM `media_abioticos` \
    GROUP BY `abioticos_id` \
  ) c \
  ON a.`abioticos_id` = b.`abioticos_id` \
  AND b.`file_url` = c.`firstfile` \
  LEFT JOIN `jnc_stage_abioticos` d \
  ON a.`abioticos_id` = d.`abioticos_id` \
  GROUP BY a.`abioticos_id` \
  ORDER BY a.`abioticos_id`",

  allDiseases: " \
  SELECT `a`.*, `b`.`file_url`, GROUP_CONCAT(DISTINCT d.`stage_id`) 'stageList' \
  FROM `disease` a \
  LEFT JOIN `media_disease` b \
  ON a.`disease_id` = b.`disease_id` \
  LEFT JOIN ( \
    SELECT `disease_id`, MIN(`file_url`) 'firstfile', `file_type` \
    FROM `media_disease` \
    GROUP BY `disease_id` \
  ) c \
  ON a.`disease_id` = b.`disease_id` \
  AND b.`file_url` = c.`firstfile` \
  LEFT JOIN `jnc_stage_disease` d \
  ON a.`disease_id` = d.`disease_id` \
  GROUP BY a.`disease_id` \
  ORDER BY a.`disease_id`",

  allPests: " \
  SELECT `a`.*, `b`.`file_url`, GROUP_CONCAT(DISTINCT d.`stage_id`) 'stageList' \
  FROM `pests` a \
  LEFT JOIN `media_pests` b \
  ON a.`pest_id` = b.`pest_id` \
  LEFT JOIN ( \
    SELECT `pest_id`, MIN(`file_url`) 'firstfile', `file_type` \
    FROM `media_pests` \
    GROUP BY `pest_id` \
  ) c \
  ON a.`pest_id` = b.`pest_id` \
  AND b.`file_url` = c.`firstfile` \
  LEFT JOIN `jnc_stage_pest` d \
  ON a.`pest_id` = d.`pest_id` \
  GROUP BY a.`pest_id` \
  ORDER BY a.`pest_id`",

  allPossibilities: " \
  SELECT `a`.*, `b`.`file_url`, GROUP_CONCAT(DISTINCT d.`stage_id`) 'stageList', GROUP_CONCAT(DISTINCT e.`abioticos_id`) 'abioticosList', GROUP_CONCAT(DISTINCT f.`disease_id`) 'diseaseList', GROUP_CONCAT(DISTINCT g.`pest_id`) 'pestList' \
  FROM `possibilities` a \
  LEFT JOIN `media_possibilities` b \
  ON a.`possibilities_id` = b.`possibilities_id` \
  LEFT JOIN ( \
    SELECT `possibilities_id`, MIN(`file_url`) 'firstfile', `file_type` \
     FROM `media_possibilities` \
     GROUP BY `possibilities_id` \
   ) c \
   ON a.`possibilities_id` = b.`possibilities_id` \
   AND b.`file_url` = c.`firstfile` \
   LEFT JOIN `jnc_possibilities_stage` d \
   ON a.`possibilities_id` = d.`possibilities_id` \
   LEFT JOIN `jnc_possibilities_abioticos` e \
   ON a.`possibilities_id` = e.`possibilities_id` \
   LEFT JOIN `jnc_possibilities_disease` f \
   ON a.`possibilities_id` = f.`possibilities_id` \
   LEFT JOIN `jnc_possibilities_pest` g \
   ON a.`possibilities_id` = g.`possibilities_id` \
   GROUP BY a.`possibilities_id` \
   ORDER BY a.`possibilities_id`",

   allInputs: " \
   SELECT a.*, b.`file_url`, GROUP_CONCAT(DISTINCT d.`possibilities_id`) 'possibilitiesList', GROUP_CONCAT(DISTINCT e.`vendor_id`) 'vendorList', f.`nom` 'porgValue', g.`nom` 'pquiValue', h.`nom` 'ppermValue' \
   FROM `inputs` a \
   LEFT JOIN `media_inputs` b \
   ON a.`input_id` = b.`input_id`  \
   LEFT JOIN ( \
     SELECT `input_id`, MIN(`file_url`) 'firstfile', `file_type` \
     FROM `media_inputs` \
     GROUP BY `input_id` \
   ) c \
   ON a.`input_id` = b.`input_id` \
   AND b.`file_url` = c.`firstfile` \
   LEFT JOIN `jnc_possibilities_input` d \
   ON a.`input_id` = d.`input_id` \
   LEFT JOIN `jnc_vendor_input` e \
   ON a.`input_id` = e.`input_id` \
   LEFT JOIN `yn` f \
   ON a.`porg` = f.`id` \
   LEFT JOIN `yn` g \
   ON a.`pqui` = g.`id` \
   LEFT JOIN `yn` h  \
   ON a.`pperm` = h.`id` \
   GROUP BY a.`input_id` \
   ORDER BY a.`input_id`",

   allVendors: " \
     SELECT a.*, b.`file_url`, GROUP_CONCAT(DISTINCT d.`input_id`) 'inputList', GROUP_CONCAT(DISTINCT e.`variety_id`) 'varietyList', f.`nom` 'cuando_lunesValue', g.`nom` 'cuando_martesValue', h.`nom` 'cuando_miercolesValue', i.`nom` 'cuando_juevesValue', j.`nom` 'cuando_viernesValue', k.`nom` 'cuando_sabadoValue', l.`nom` 'cuando_domingoValue', m.`spanish` 'vcomoValue' \
     FROM `vendor` a  \
     LEFT JOIN `media_vendor` b \
     ON a.`vendor_id` = b.`vendor_id` \
     LEFT JOIN ( \
      SELECT `vendor_id`, MIN(`file_url`) 'firstfile', `file_type` \
      FROM `media_vendor` \
      GROUP BY `vendor_id` \
    ) c \
     ON a.`vendor_id` = b.`vendor_id` \
     AND b.`file_url` = c.`firstfile` \
     LEFT JOIN `jnc_vendor_input` d \
     ON a.`vendor_id` = d.`vendor_id` \
     LEFT JOIN `jnc_vendor_variety` e \
     ON a.`vendor_id` = e.`vendor_id` \
    LEFT JOIN `yn` f \
    ON a.`cuando_lunes` = f.`id` \
    LEFT JOIN `yn` g \
    ON a.`cuando_martes` = g.`id` \
    LEFT JOIN `yn` h \
    ON a.`cuando_miercoles` = h.`id` \
    LEFT JOIN `yn` i \
    ON a.`cuando_jueves` = i.`id` \
    LEFT JOIN `yn` j \
    ON a.`cuando_viernes` = j.`id` \
    LEFT JOIN `yn` k \
    ON a.`cuando_sabado` = k.`id` \
    LEFT JOIN `yn` l \
    ON a.`cuando_domingo` = l.`id` \
    LEFT JOIN `vcomo` m \
    ON a.`vcomo` = m.`id` \
    GROUP BY a.`vendor_id` \
    ORDER BY a.`vendor_id`",

   allVarieties: " \
   SELECT a.*, b.`file_url`, GROUP_CONCAT(DISTINCT d.`vendor_id`) 'vendorList', GROUP_CONCAT(DISTINCT e.`onombre`) 'onombre', f.`nom` 'epocames1Value', g.`nom` 'epocaif1Value', h.`nom` 'epocames2Value', i.`nom` 'epocaif2Value', j.`nom` 'precozValue', k.`nombre` 'theladaValue', l.`nombre` 'tmildiuValue', m.`nombre` 'tsequiaValue', n.`nombre` 'tgranizoValue', o.`nombre` 'tvolcaValue', GROUP_CONCAT(DISTINCT p.`media_id`) 'mediaList', GROUP_CONCAT(DISTINCT q.`id`) 'documentList', GROUP_CONCAT(DISTINCT r.`vendor_id`) 'vendorList' \
      FROM `variety` a \
      LEFT JOIN `media_variety` b \
      ON a.`variety_id` = b.`variety_id` \
      LEFT JOIN ( \
        SELECT `variety_id`, MIN(`file_url`) 'firstfile', `file_type`\
        FROM `media_variety`\
        GROUP BY `variety_id`\
      ) c\
      ON a.`variety_id` = b.`variety_id` \
      AND b.`file_url` = c.`firstfile` \
      LEFT JOIN `jnc_vendor_variety` d \
      ON a.`variety_id` = d.`variety_id` \
       LEFT JOIN `variety_name` e \
       ON a.`variety_id` = e.`variety_id` \
       LEFT JOIN `months` f \
       ON a.`epocames1` = f.`id` \
       LEFT JOIN `months` h \
       ON a.`epocames2` = h.`id` \
       LEFT JOIN `months` g \
       ON a.`epocaif1` = g.`id` \
       LEFT JOIN `months` i \
       ON a.`epocaif2` = i.`id` \
       LEFT JOIN `precoz` j \
       ON a.`precoz` = j.`id` \
       LEFT JOIN `tolerance` k \
       ON a.`thelada` = k.`id` \
       LEFT JOIN `tolerance` l \
       ON a.`tmildiu` = l.`id` \
       LEFT JOIN `tolerance` m \
       ON a.`tsequia` = m.`id` \
       LEFT JOIN `tolerance` n \
       ON a.`tgranizo` = n.`id` \
       LEFT JOIN `tolerance` o \
       ON a.`tvolca` = o.`id` \
       LEFT JOIN `media_variety` p \
       ON a.`variety_id` = p.`variety_id` \
       LEFT JOIN `jnc_documents_variety` q \
       ON a.`variety_id` = q.`variety_id` \
       LEFT JOIN `jnc_vendor_variety` r \
       ON a.`variety_id` = r.`variety_id` \
      GROUP BY a.`variety_id` \
      ORDER BY a.`variety_id`"

};
