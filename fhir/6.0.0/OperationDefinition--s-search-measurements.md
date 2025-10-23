# Search measurements - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Search measurements**

## OperationDefinition: Search measurements 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-search-measurements | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:search-measurements |

 
The search-measurements operation searches for bundles of related resources having Observations, Media or QuestionnaireResponses matching the search criteria. 

### Parameter description

 
* patient: Find resource(s) referring the specified patient - Reference(eHealth Patient).
* episodeOfCare: Find resource(s) referring the specified episode of care - Reference(eHealth EpisodeOfCare).
*  

| | |
| :--- | :--- |
| device: Find resource(s) referring the specified device - Reference(eHealth Device | eHealth DeviceMetric). |

 
* period: Resource(s) must have either an instant or time period within or overlapping the given period. The used instant/time period varies with resource as follows: Element effective for eHealth Observation; Element authored for eHealth QuestionnaireResponse; Element occurrence for eHealth Media.
* based-on: Resources(s) must be based on any of the specified procedure requests - Reference(eHealth ServiceRequest).
*  

| | |
| :--- | :--- |
| _tag: When specified, resource(s) must have at least one of the specified tags in meta data - for instance a Coding(ehealth-system CodeSystem) or on token form: http://ehealth.sundhed.dk/cs/ehealth-system | xa. Note that the _tag functions as an optional filter, not as a selection criteria in the way the other parameters work. |

 
 
"period" must always be specified. 
Additionally at least "patient" or "episodeOfCare" must be specified. 

### Output description

 
The result of this operation will return a Bundle with a list of nested Bundles having resources matching the search parameters. 
Each of the nested bundles will contain the full set of related eHealth Observation, eHealth Media, eHealth QuestionnaireResponse and eHealth Provenance resources. 
If a eHealth QuestionnaireResponse is part of the nested bundle the referenced eHealth Questionnaire will also be included in the nested bundle. 
Related resources are the set of resources created by a single invocation of the submit-measurement operation. 

URL: [base]/$search-measurements

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
  * **Documentation**: Find resource(s) referring the specified episode of care - Reference(eHealth EpisodeOfCare)
* **Use**: IN
  * **Name**: device
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: Find resource(s) referring the specified device - Reference(eHealth Device)
* **Use**: IN
  * **Name**: period
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [Period](http://hl7.org/fhir/R4/datatypes.html#Period)
  * **Binding**: 
  * **Documentation**: Resource(s) must have either an instant or time period within or overlapping the given period.
* **Use**: IN
  * **Name**: based-on
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Reference](http://hl7.org/fhir/R4/references.html#Reference)
  * **Binding**: 
  * **Documentation**: Resources(s) must be based on any of the specified procedure requests - Reference(eHealth ServiceRequest)
* **Use**: IN
  * **Name**: _tag
  * **Scope**: 
  * **Cardinality**: 0..*
  * **Type**: [Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)
  * **Binding**: 
  * **Documentation**: Search for resources which have the given tag
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
  "id" : "-s-search-measurements",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-search-measurements",
  "version" : "6.0.0",
  "name" : "search-measurements",
  "title" : "Search measurements",
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
  "description" : "The search-measurements operation searches for bundles of related resources having Observations, Media or QuestionnaireResponses matching the search criteria.\n\n\n### Parameter description\n- patient: Find resource(s) referring the specified patient - Reference(eHealth Patient).\n- episodeOfCare: Find resource(s) referring the specified episode of care - Reference(eHealth EpisodeOfCare).\n- device: Find resource(s) referring the specified device - Reference(eHealth Device | eHealth DeviceMetric).\n- period: Resource(s) must have either an instant or time period within or overlapping the given period. The used instant/time period varies with resource as follows: Element effective for eHealth Observation; Element authored for eHealth QuestionnaireResponse; Element occurrence for eHealth Media.\n- based-on: Resources(s) must be based on any of the specified procedure requests - Reference(eHealth ServiceRequest).\n- _tag: When specified, resource(s) must have at least one of the specified tags in meta data - for instance a Coding(ehealth-system CodeSystem) or on token form: http://ehealth.sundhed.dk/cs/ehealth-system|xa. Note that the _tag functions as an optional filter, not as a selection criteria in the way the other parameters work.\n\n\n\"period\" must always be specified.\n\nAdditionally at least \"patient\" or \"episodeOfCare\" must be specified.\n\n### Output description\n\nThe result of this operation will return a Bundle with a list of nested Bundles having resources matching the search parameters.\n\nEach of the nested bundles will contain the full set of related eHealth Observation, eHealth Media, eHealth QuestionnaireResponse and eHealth Provenance resources.\n\nIf a eHealth QuestionnaireResponse is part of the nested bundle the referenced eHealth Questionnaire will also be included in the nested bundle.\n\nRelated resources are the set of resources created by a single invocation of the submit-measurement operation.\n\n",
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
  "code" : "search-measurements",
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
      "documentation" : "Find resource(s) referring the specified episode of care - Reference(eHealth EpisodeOfCare)",
      "type" : "Reference"
    },
    {
      "name" : "device",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "documentation" : "Find resource(s) referring the specified device - Reference(eHealth Device)",
      "type" : "Reference"
    },
    {
      "name" : "period",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "documentation" : "Resource(s) must have either an instant or time period within or overlapping the given period.",
      "type" : "Period"
    },
    {
      "name" : "based-on",
      "use" : "in",
      "min" : 0,
      "max" : "*",
      "documentation" : "Resources(s) must be based on any of the specified procedure requests - Reference(eHealth ServiceRequest)",
      "type" : "Reference"
    },
    {
      "name" : "_tag",
      "use" : "in",
      "min" : 0,
      "max" : "*",
      "documentation" : "Search for resources which have the given tag",
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
