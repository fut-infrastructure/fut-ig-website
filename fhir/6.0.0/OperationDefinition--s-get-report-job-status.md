# Get Report Job Status - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Get Report Job Status**

## OperationDefinition: Get Report Job Status 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-get-report-job-status | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:get-report-job-status |

 

### Status Contents

 
This operation returns status for reports scheduled by the user (by schedule or execute) 

### Output

 
The output is a Bundle containing Parameters resources for each scheduled report. The parts of the Parameters describe the class of report, the parameters that the report was scheduled with, the user ID, the status of the report, a reference to the report Binary and time of creation, start, and end of execution. 

### Example output

 
{ 'resourceType': 'Bundle', 'type': 'collection', 'entry': [ { 'fullUrl': 'ce35bcd5-4bb2-4c6e-b230-5347df1fe9bc', 'resource': { 'resourceType': 'Parameters', 'id': 'ce35bcd5-4bb2-4c6e-b230-5347df1fe9bc', 'parameter': [ { 'name': 'reportJob', 'part': [ { 'name': 'reportClass', 'valueString': 'com.systematic.ehealth.reporting.reports.PatientsUsageReport' }, { 'name': 'userId', 'valueString': '0aaca7cd-67c3-48dd-a8c4-0cceecb5d276' }, { 'name': 'status', 'valueString': 'DONE' }, { 'name': 'binary', 'valueReference': { 'reference': 'https://reporting.local.ehealth.sundhed.dk/fhir/Binary/7' } }, { 'name': 'parameters', 'resource': { 'resourceType': 'Parameters', 'parameter': [ { 'name': 'anonymization', 'valueString': 'None' } ] } }, { 'name': 'created', 'valueDateTime': '2023-10-12T09:51:50+00:00' }, { 'name': 'started', 'valueDateTime': '2023-10-12T09:51:50+00:00' }, { 'name': 'ended', 'valueDateTime': '2023-10-12T09:51:51+00:00' } ] } ] } } ] } 

URL: [base]/$get-report-job-status

### Parameters

* **Use**: OUT
  * **Name**: return
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Bundle](http://hl7.org/fhir/R4/bundle.html)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-get-report-job-status",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-get-report-job-status",
  "version" : "6.0.0",
  "name" : "get-report-job-status",
  "title" : "Get Report Job Status",
  "status" : "active",
  "kind" : "operation",
  "date" : "2025-10-23T10:25:37+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [
    {
      "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://ehealth.sundhed.dk"
        }
      ]
    }
  ],
  "description" : "### Status Contents \nThis operation returns status for reports scheduled by the user (by schedule or execute)\n### Output\nThe output is a Bundle containing Parameters resources for each scheduled report.\nThe parts of the Parameters describe the class of report, the parameters that the report\nwas scheduled with, the user ID, the status of the report, a reference to the report Binary\nand time of creation, start, and end of execution.\n### Example output\n{\n  'resourceType': 'Bundle',\n  'type': 'collection',\n  'entry': [\n    {\n      'fullUrl': 'ce35bcd5-4bb2-4c6e-b230-5347df1fe9bc',\n      'resource': {\n        'resourceType': 'Parameters',\n        'id': 'ce35bcd5-4bb2-4c6e-b230-5347df1fe9bc',\n        'parameter': [\n          {\n            'name': 'reportJob',\n            'part': [\n              {\n                'name': 'reportClass',\n                'valueString': 'com.systematic.ehealth.reporting.reports.PatientsUsageReport'\n              },\n              {\n                'name': 'userId',\n                'valueString': '0aaca7cd-67c3-48dd-a8c4-0cceecb5d276'\n              },\n              {\n                'name': 'status',\n                'valueString': 'DONE'\n              },\n              {\n                'name': 'binary',\n                'valueReference': {\n                  'reference': 'https://reporting.local.ehealth.sundhed.dk/fhir/Binary/7'\n                }\n              },\n              {\n                'name': 'parameters',\n                'resource': {\n                  'resourceType': 'Parameters',\n                  'parameter': [\n                    {\n                      'name': 'anonymization',\n                      'valueString': 'None'\n                    }\n                  ]\n                }\n              },\n              {\n                'name': 'created',\n                'valueDateTime': '2023-10-12T09:51:50+00:00'\n              },\n              {\n                'name': 'started',\n                'valueDateTime': '2023-10-12T09:51:50+00:00'\n              },\n              {\n                'name': 'ended',\n                'valueDateTime': '2023-10-12T09:51:51+00:00'\n              }\n            ]\n          }\n        ]\n      }\n    }\n  ]\n}\n",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "affectsState" : false,
  "code" : "get-report-job-status",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [
    {
      "name" : "return",
      "use" : "out",
      "min" : 0,
      "max" : "1",
      "type" : "Bundle"
    }
  ]
}

```
