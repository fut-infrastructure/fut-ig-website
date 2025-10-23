# Schedule patient usage statistics - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Schedule patient usage statistics**

## OperationDefinition: Schedule patient usage statistics 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-schedule-patient-usage-stats | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:schedule-patient-usage-stats |

 

### Report Contents

 
This report contains an overview of the number of unique active citizens with Episodes of Care, shown both on monthly and yearly basis. 

### Grouping

 
This report is grouped by months and years. All groups are contained in the same JSON file. 

### Parameters

 
* Output can be found in Binary.content. This is a Base64 encoded .zip file containing a JSon file corresponding to the report groups.


  All returned objects are Fhir resources. See the implementation guide for details First example is the monthly data:
 
{ 'PatientsUsageSummary': { 'monthData': [ { 'month': '1', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '2', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '3', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '4', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '5', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '6', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '7', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '8', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '9', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '10', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '11', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] }, { 'month': '12', 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 1, 'percentChangeFromLastMonth': 0.0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 1, 'percentChangeFromLastMonth': 0.0 } ] } ] } } 
Second example is the yearly data: 
{ 'PatientsUsageSummary': { 'yearData': [ { 'year': '1970', 'entries': [ { 'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays', 'count': 12, 'average': 1.0, 'usageBaseline': 10000, 'averageRounded': 1000.0, 'averageBeyondBaseline': 0 }, { 'name': 'uniquePatientsWithEpisodeOfCare', 'count': 12, 'average': 1.0, 'usageBaseline': 10000, 'averageRounded': 1000.0, 'averageBeyondBaseline': 0 } ] } ] } } 

URL: [base]/$schedule-patient-usage-stats

### Parameters

* **Use**: IN
  * **Name**: anonymization
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [string](http://hl7.org/fhir/R4/datatypes.html#string)
  * **Binding**: 
  * **Documentation**: 
* **Use**: OUT
  * **Name**: return
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Binary](http://hl7.org/fhir/R4/binary.html)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-schedule-patient-usage-stats",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-schedule-patient-usage-stats",
  "version" : "6.0.0",
  "name" : "schedule-patient-usage-stats",
  "title" : "Schedule patient usage statistics",
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
  "description" : "### Report Contents\nThis report contains an overview of the number of unique active citizens with Episodes of Care, shown both on monthly and yearly basis.\n### Grouping \nThis report is grouped by months and years. All groups are contained in the same JSON file.\n### Parameters\n- None\n### Output\nOutput can be found in Binary.content. This is a Base64 encoded .zip file containing a JSon file corresponding to the report groups.\n### Example output\nAll returned objects are Fhir resources. See the implementation guide for details\nFirst example is the monthly data:\n\n{\n\t'PatientsUsageSummary': {\n\t\t'monthData': [\n\t\t\t{\n\t\t\t\t'month': '1',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '2',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '3',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '4',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '5',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '6',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '7',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '8',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '9',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '10',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '11',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t},\n\t\t\t{\n\t\t\t\t'month': '12',\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 1,\n\t\t\t\t\t\t'percentChangeFromLastMonth': 0.0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t}\n      ]\n   }\n}\n\nSecond example is the yearly data:\n\n{\n\t'PatientsUsageSummary': {\n\t\t'yearData': [\n\t\t\t{\n\t\t\t\t'year': '1970',\n\t\t\t\t'entries': [\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCareBeingActiveSevenOrMoreDays',\n\t\t\t\t\t\t'count': 12,\n\t\t\t\t\t\t'average': 1.0,\n\t\t\t\t\t\t'usageBaseline': 10000,\n\t\t\t\t\t\t'averageRounded': 1000.0,\n\t\t\t\t\t\t'averageBeyondBaseline': 0\n\t\t\t\t\t},\n\t\t\t\t\t{\n\t\t\t\t\t\t'name': 'uniquePatientsWithEpisodeOfCare',\n\t\t\t\t\t\t'count': 12,\n\t\t\t\t\t\t'average': 1.0,\n\t\t\t\t\t\t'usageBaseline': 10000,\n\t\t\t\t\t\t'averageRounded': 1000.0,\n\t\t\t\t\t\t'averageBeyondBaseline': 0\n\t\t\t\t\t}\n\t\t\t\t]\n\t\t\t}\n      ]\n   }\n}\n",
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
  "affectsState" : true,
  "code" : "schedule-patient-usage-stats",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [
    {
      "name" : "anonymization",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "type" : "string"
    },
    {
      "name" : "return",
      "use" : "out",
      "min" : 0,
      "max" : "1",
      "type" : "Binary"
    }
  ]
}

```
