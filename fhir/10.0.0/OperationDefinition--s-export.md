# FHIR Bulk Data System Level Export - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FHIR Bulk Data System Level Export**

## OperationDefinition: FHIR Bulk Data System Level Export 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-export | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:export |

 
FHIR Operation to initiate an export of data from a FHIR server. The type of resources returned can be restricted using the '_type' parameter, and the '_since' parameter can be used to restrict resources to be only included if changed since the supplied time. The FHIR server support invocation of this operation using the [FHIR Asynchronous Request Pattern](http://hl7.org/fhir/R4/async.html). 

## Initiation of export

 
The initiation of an export must specify the request header 'Prefer: respond-async', and will return '202 Accepted' with a polling location in the response header 'Content-Location'. The polling location is for the endpoint '$export-poll-status' and has the export job ID as parameter '_jobId'. 

### Parameters

 
* _outputFormat: Optional parameter to specify the output format of the exported files. Default is 'application/fhir+ndjson'
* _type: Optional parameter to specify a comma separated list of resource types to be included in the export. If not provided, all resource types will be included.
* _since: Optional parameter to specify a time. Only resources that have been created or modified after this time will be included in the export (i.e., if Resource.meta.lastUpdated is later than the supplied _since time).
* _until: Optional parameter to specify a time. Only resources that have been created or modified before this time will be included in the export (i.e., if Resource.meta.lastUpdated is earlier than the supplied _until time).
* _typeFilter: Optional parameter to apply search filter of resources for export. It is a string of comma-delimited FHIR REST search queries in the format [resourceType]?[parameters]. The filter will be applied when searching resources.
* _typePostFetchFilterUrl: Optional parameter to apply filtering of resources for export. It is a string of comma-delimited FHIR REST search queries in the format [resourceType]?[parameters]. The filter will be applied on resources after being fetched from the database.
* _includeHistory: Optional parameter to specify whether historical versions of resources should be included in the export. Default is false.
* Subsequent GET requests to the polling location will return '202 Accepted' with a response header 'X-Progress' containing a status message for the progress of the export job. When the job has finished, the polling location will return '200 OK', and the contents of the body will be a JSON object providing metadata and links to the generated bulk export data files.


  The JSON object returned when the export job is complete will contain a list of files (Binary resources) available for download. Each file can be retrieved using a standard HTTP GET request to the provided URL. The security context of the Binary resources resulting from the export is the user that initiated the export. The files can therefore only be retrieved by the same user.


  The exported files are retained for a limited time after which they are deleted. The retention time is a server configuration with default 2 hours.
 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-export",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-export",
  "version" : "10.0.0",
  "name" : "export",
  "title" : "FHIR Bulk Data System Level Export",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-08-06T13:17:54+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "FHIR Operation to initiate an export of data from a FHIR server. The type of resources returned can be restricted using the '_type' parameter, and the '_since' parameter can be used to restrict resources to be only included if changed since the supplied time. The FHIR server support invocation of this operation using the [FHIR Asynchronous Request Pattern](http://hl7.org/fhir/R4/async.html).\n## Initiation of export\nThe initiation of an export must specify the request header 'Prefer: respond-async', and will return '202 Accepted' with a polling location in the response header 'Content-Location'. The polling location is for the endpoint '$export-poll-status' and has the export job ID as parameter '_jobId'.\n### Parameters\n- _outputFormat: Optional parameter to specify the output format of the exported files. Default is 'application/fhir+ndjson'\n- _type: Optional parameter to specify a comma separated list of resource types to be included in the export. If not provided, all resource types will be included.\n- _since: Optional parameter to specify a time. Only resources that have been created or modified after this time will be included in the export (i.e., if Resource.meta.lastUpdated is later than the supplied _since time).\n- _until: Optional parameter to specify a time. Only resources that have been created or modified before this time will be included in the export (i.e., if Resource.meta.lastUpdated is earlier than the supplied _until time).\n- _typeFilter: Optional parameter to apply search filter of resources for export. It is a string of comma-delimited FHIR REST search queries in the format [resourceType]?[parameters]. The filter will be applied when searching resources.\n- _typePostFetchFilterUrl: Optional parameter to apply filtering of resources for export. It is a string of comma-delimited FHIR REST search queries in the format [resourceType]?[parameters]. The filter will be applied on resources after being fetched from the database.\n- _includeHistory: Optional parameter to specify whether historical versions of resources should be included in the export. Default is false.\n- _exportId: Optional parameter to specify a client provided identifier for the export. Resulting exported files (Binary) will be labeled with the identifer in meta extension 'https://hapifhir.org/NamingSystem/bulk-export-identifier'\n## Polling status of export\nSubsequent GET requests to the polling location will return '202 Accepted' with a response header 'X-Progress' containing a status message for the progress of the export job. When the job has finished, the polling location will return '200 OK', and the contents of the body will be a JSON object providing metadata and links to the generated bulk export data files.\n## Retrieving exported files\nThe JSON object returned when the export job is complete will contain a list of files (Binary resources) available for download. Each file can be retrieved using a standard HTTP GET request to the provided URL. The security context of the Binary resources resulting from the export is the user that initiated the export. The files can therefore only be retrieved by the same user.\n### Retention of exported files\nThe exported files are retained for a limited time after which they are deleted. The retention time is a server configuration with default 2 hours.\n",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "export",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "_outputFormat",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "type" : "string"
  },
  {
    "name" : "_type",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "type" : "string"
  },
  {
    "name" : "_since",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "type" : "instant"
  },
  {
    "name" : "_until",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "type" : "instant"
  },
  {
    "name" : "_typeFilter",
    "use" : "in",
    "min" : 0,
    "max" : "*",
    "type" : "string"
  },
  {
    "name" : "_typePostFetchFilterUrl",
    "use" : "in",
    "min" : 0,
    "max" : "*",
    "type" : "string"
  },
  {
    "name" : "_exportId",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "type" : "string"
  },
  {
    "name" : "_includeHistory",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "type" : "boolean"
  }]
}

```
