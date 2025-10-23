# Search measurements bundle limit - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Search measurements bundle limit**

## OperationDefinition: Search measurements bundle limit 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-search-measurements-bundle-limit | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:search-measurements-bundle-limit |

 
The search-measurements-bundle-limit operation searches for a number of bundles of related resources having Observations, Media or QuestionnaireResponses matching the search criteria. 

### Parameter description

 
* patient: Find resource(s) referring the specified patient - Reference(eHealth Patient).
* episodeOfCare: Find resource(s) referring the specified episode of care - Reference(eHealth EpisodeOfCare).
* count: The number of bundles to return, max allowed value is 100 - Integer.
* start: Based on the effective time of measurement, please see [Observation.effective[x]](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-observation-definitions.html#key_Observation.effective[x]) , [QuestionnaireResponse.effective-period](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-questionnaireresponse.html#effective-period) , and [Media.created[x]](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-media-definitions.html#key_Media.created[x]). If QuestionnaireResponse.effectivePeriod is missing, authored is used instead. If provided, the operation will search for observation, media and QuestionnaireResponse resource(s) with a clinical effective time after this time. The result bundles will be sorted in ascending order - DateTime.
* end: Based on the effective time of measurement, please see [Observation.effective[x]](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-observation-definitions.html#key_Observation.effective[x]) , [QuestionnaireResponse.effective-period](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-questionnaireresponse.html#effective-period) , and [Media.created[x]](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-media-definitions.html#key_Media.created[x]). If QuestionnaireResponse.effectivePeriod is missing, authored is used instead. If provided, the operation will search for observation, media and QuestionnaireResponse resource(s) with a clinical effective time before this time. The result bundles will be sorted in descending order - DateTime.
* based-on: Resources(s) must be based on any of the specified service requests - Reference(eHealth ServiceRequest).
*  

| | |
| :--- | :--- |
| _tag: When specified, resource(s) must have at least one of the specified tags in meta data - for instance a Coding(ehealth-system CodeSystem) or on token form: http://ehealth.sundhed.dk/cs/ehealth-system | xa. Note that the _tag functions as an optional filter, not as a selection criteria in the way the other parameters work. |

 
 
One of either "start" or "end", along with the "count" parameter must always be specified. 
Additionally at least "patient" or "episodeOfCare" or "based-on" must be specified. 

### Output description

 
The result of this operation returns a Bundle with a list of nested Bundles having resources matching the search parameters. The number of nested Bundles depends on the count parameter. 
Each of the nested bundles contains the full set of related eHealth Observation, eHealth Media, eHealth QuestionnaireResponse and eHealth Provenance resources, from the same submission request. 
Related resources are the set of resources created by a single invocation of the submit-measurement operation. 

URL: [base]/$search-measurements-bundle-limit

### Parameters

* **Use**: IN
  * **Name**: patient
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: Find resource(s) referring the specified patient - Reference(eHealth Patient).
* **Use**: IN
  * **Name**: episodeOfCare
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: Find resource(s) referring the specified episode of care - Reference(eHealth EpisodeOfCare).
* **Use**: IN
  * **Name**: count
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [integer](http://hl7.org/fhir/R4/datatypes.html#integer)
  * **Binding**: 
  * **Documentation**: The number of bundles to return, max allowed value is 100 - Integer.
* **Use**: IN
  * **Name**: start
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [dateTime](http://hl7.org/fhir/R4/datatypes.html#dateTime)
  * **Binding**: 
  * **Documentation**: Based on the effective time of measurement, please see [Observation.effective[x]](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-observation-definitions.html#key_Observation.effective[x]), [QuestionnaireResponse.effective-period](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-questionnaireresponse.html#effective-period), and [Media.created[x]](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-media-definitions.html#key_Media.created[x]). If QuestionnaireResponse.effectivePeriod is missing, authored is used instead. If provided, the operation will search for observation, media and QuestionnaireResponse resource(s) with a clinical effective time after this time. The result bundles will be sorted in ascending order - DateTime.
* **Use**: IN
  * **Name**: end
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [dateTime](http://hl7.org/fhir/R4/datatypes.html#dateTime)
  * **Binding**: 
  * **Documentation**: Based on the effective time of measurement, please see [Observation.effective[x]](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-observation-definitions.html#key_Observation.effective[x]), [QuestionnaireResponse.effective-period](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-questionnaireresponse.html#effective-period), and [Media.created[x]](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-media-definitions.html#key_Media.created[x]). If QuestionnaireResponse.effectivePeriod is missing, authored is used instead. If provided, the operation will search for observation, media and QuestionnaireResponse resource(s) with a clinical effective time before this time. The result bundles will be sorted in descending order - DateTime.
* **Use**: IN
  * **Name**: based-on
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: Resources(s) must be based on any of the specified service requests - Reference(eHealth ServiceRequest).
* **Use**: IN
  * **Name**: _tag
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)
  * **Binding**: 
  * **Documentation**: Search for resources which have the given tag.
* **Use**: OUT
  * **Name**: bundle
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Bundle](http://hl7.org/fhir/R4/bundle.html)
  * **Binding**: 
  * **Documentation**: 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "-s-search-measurements-bundle-limit",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-search-measurements-bundle-limit",
  "version" : "6.0.0",
  "name" : "search-measurements-bundle-limit",
  "title" : "Search measurements bundle limit",
  "status" : "active",
  "kind" : "operation",
  "date" : "2025-10-23T10:34:08+00:00",
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
  "description" : "The search-measurements-bundle-limit operation searches for a number of bundles of related resources having Observations, Media or QuestionnaireResponses matching the search criteria.\n\n\n### Parameter description\n- patient: Find resource(s) referring the specified patient - Reference(eHealth Patient).\n- episodeOfCare: Find resource(s) referring the specified episode of care - Reference(eHealth EpisodeOfCare).\n- count: The number of bundles to return, max allowed value is 100 - Integer.\n- start: Based on the effective time of measurement, please see <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-observation-definitions.html#key_Observation.effective[x]'>Observation.effective[x]</a> , <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-questionnaireresponse.html#effective-period'>QuestionnaireResponse.effective-period</a> , and <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-media-definitions.html#key_Media.created[x]'>Media.created[x]</a>. If QuestionnaireResponse.effectivePeriod is missing, authored is used instead. If provided, the operation will search for observation, media and QuestionnaireResponse resource(s) with a clinical effective time after this time. The result bundles will be sorted in ascending order - DateTime.\n- end: Based on the effective time of measurement, please see <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-observation-definitions.html#key_Observation.effective[x]'>Observation.effective[x]</a> , <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-questionnaireresponse.html#effective-period'>QuestionnaireResponse.effective-period</a> , and <a href='https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-media-definitions.html#key_Media.created[x]'>Media.created[x]</a>. If QuestionnaireResponse.effectivePeriod is missing, authored is used instead. If provided, the operation will search for observation, media and QuestionnaireResponse resource(s) with a clinical effective time before this time. The result bundles will be sorted in descending order - DateTime.\n- based-on: Resources(s) must be based on any of the specified service requests - Reference(eHealth ServiceRequest).\n- _tag: When specified, resource(s) must have at least one of the specified tags in meta data - for instance a Coding(ehealth-system CodeSystem) or on token form: http://ehealth.sundhed.dk/cs/ehealth-system|xa. Note that the _tag functions as an optional filter, not as a selection criteria in the way the other parameters work.\n\n\nOne of either \"start\" or \"end\", along with the \"count\" parameter must always be specified.\n\nAdditionally at least \"patient\" or \"episodeOfCare\" or \"based-on\" must be specified.\n\n### Output description\n\nThe result of this operation returns a Bundle with a list of nested Bundles having resources matching the search parameters. The number of nested Bundles depends on the count parameter.\n\nEach of the nested bundles contains the full set of related eHealth Observation, eHealth Media, eHealth QuestionnaireResponse and eHealth Provenance resources, from the same submission request.\n\nRelated resources are the set of resources created by a single invocation of the submit-measurement operation.\n\n",
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
  "code" : "search-measurements-bundle-limit",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [
    {
      "name" : "patient",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "documentation" : "Find resource(s) referring the specified patient - Reference(eHealth Patient).",
      "type" : "Reference"
    },
    {
      "name" : "episodeOfCare",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "documentation" : "Find resource(s) referring the specified episode of care - Reference(eHealth EpisodeOfCare).",
      "type" : "Reference"
    },
    {
      "name" : "count",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "documentation" : "The number of bundles to return, max allowed value is 100 - Integer.",
      "type" : "integer"
    },
    {
      "name" : "start",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "documentation" : "Based on the effective time of measurement, please see [Observation.effective[x]](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-observation-definitions.html#key_Observation.effective[x]), [QuestionnaireResponse.effective-period](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-questionnaireresponse.html#effective-period), and [Media.created[x]](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-media-definitions.html#key_Media.created[x]). If QuestionnaireResponse.effectivePeriod is missing, authored is used instead. If provided, the operation will search for observation, media and QuestionnaireResponse resource(s) with a clinical effective time after this time. The result bundles will be sorted in ascending order - DateTime.",
      "type" : "dateTime"
    },
    {
      "name" : "end",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "documentation" : "Based on the effective time of measurement, please see [Observation.effective[x]](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-observation-definitions.html#key_Observation.effective[x]), [QuestionnaireResponse.effective-period](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-questionnaireresponse.html#effective-period), and [Media.created[x]](https://ehealth.sundhed.dk/fhir/StructureDefinition-ehealth-media-definitions.html#key_Media.created[x]). If QuestionnaireResponse.effectivePeriod is missing, authored is used instead. If provided, the operation will search for observation, media and QuestionnaireResponse resource(s) with a clinical effective time before this time. The result bundles will be sorted in descending order - DateTime.",
      "type" : "dateTime"
    },
    {
      "name" : "based-on",
      "use" : "in",
      "min" : 0,
      "max" : "*",
      "documentation" : "Resources(s) must be based on any of the specified service requests - Reference(eHealth ServiceRequest).",
      "type" : "Reference"
    },
    {
      "name" : "_tag",
      "use" : "in",
      "min" : 0,
      "max" : "*",
      "documentation" : "Search for resources which have the given tag.",
      "type" : "Coding"
    },
    {
      "name" : "bundle",
      "use" : "out",
      "min" : 0,
      "max" : "1",
      "type" : "Bundle"
    }
  ]
}

```
