# Poll status of FHIR Bulk Data System Level Export - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Poll status of FHIR Bulk Data System Level Export**

## OperationDefinition: Poll status of FHIR Bulk Data System Level Export 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-export-poll-status | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*:export-poll-status |

 
Operation for polling the status of a previously initiated FHIR Bulk Data System Level Export. A complete URL including the '_jobId' is returned in the 'Content-Location' response header when initiating the export. A 'GET' request to the polling location will return '202 Accepted' with a response header 'X-Progress' containing a status message for the progress of the export job. When the job has finished, the polling location will return '200 OK', and the contents of the body will be a JSON object providing metadata and links to the generated bulk data files. A 'DELETE' request can be used to cancel the export. If the export has already finished, the delete will return '404 Not Found', else the export job will be cancelled and a '202 Accepted' is returned with an operation outcome response. 

### Parameters

 
* _jobId: the job ID for the Bulk Export job which was returned in the 'Content-Location' header when initiating the export
 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-export-poll-status",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-export-poll-status",
  "version" : "10.0.2",
  "name" : "export-poll-status",
  "title" : "Poll status of FHIR Bulk Data System Level Export",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-09-10T10:12:06+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Operation for polling the status of a previously initiated FHIR Bulk Data System Level Export. A complete URL including the '_jobId' is returned in the 'Content-Location' response header when initiating the export. A 'GET' request to the polling location will return '202 Accepted' with a response header 'X-Progress' containing a status message for the progress of the export job. When the job has finished, the polling location will return '200 OK', and the contents of the body will be a JSON object providing metadata and links to the generated bulk data files. A 'DELETE' request can be used to cancel the export. If the export has already finished, the delete will return '404 Not Found', else the export job will be cancelled and a '202 Accepted' is returned with an operation outcome response.\n### Parameters\n- _jobId: the job ID for the Bulk Export job which was returned in the 'Content-Location' header when initiating the export\n",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "export-poll-status",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [{
    "name" : "_jobId",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "type" : "string"
  }]
}

```
