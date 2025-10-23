# Submit measurement - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Submit measurement**

## OperationDefinition: Submit measurement 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-submit-measurement | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:submit-measurement |

 
The submit-measurement operation provides a single measurement in the form of a Bundle of Observation, QuestionnaireResponse and Media for storage and, subsequently, further processing in the eHealth Infrastructure. A Provenance resource is implicitly created by the infrastructure referencing input Bundle resources as target, thereby relating the resources that were submitted. 
Media resource inline content in`content.data`will be stored outside the resource, and the`content.url`for retrieval is set on the resource. Image content is anonymized by removing sensitive metadate before storage. Image content is processed to generate thumbnail representations in the thumbnail element. 

### Parameter description

 
measurement: Bundle containing: 
* 0..* Observation (ehealth-observation profile)
* 0..* QuestionnaireResponse (ehealth-questionnaireresponse profile)
* 0..* Media (ehealth-media profile)
* 0..* Provenance (ehealth-provenance profile). Each Provenance (which is intended for capturing reuse of measurement(s) – as described in the eHealth Observation profile introduction) must refer to other resources in the Bundle as target in the format "urn:oid:" or "urn:uuid:.".
 
All resources in the Bundle must refer to the same Patient and EpisodeOfCare. All measurement resources in the Bundle must have status either`completed`or`final`(`completed`in case of Media/QuestionnaireResponse and`final`in case of Observation). All resources in the Bundle as well as the created Provenance will receive any missing system tags (ehealth-system CodeSystem) provided by the referenced EpisodeOfCare. The request will be denied if any resource in the Bundle contains a system tag, which is not present on the referenced EpisodeOfCare 

### Output description

 
The returned Bundle contains references to the stored input resources where the id has been substituted. 
eHealth infrastructure will substitute the id when saving the resources in a single transaction. 

URL: [base]/$submit-measurement

### Parameters

* **Use**: IN
  * **Name**: measurement
  * **Scope**: 
  * **Cardinality**: 0..1
  * **Type**: [Bundle](http://hl7.org/fhir/R4/bundle.html)
  * **Binding**: 
  * **Documentation**: 
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
  "id" : "-s-submit-measurement",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-submit-measurement",
  "version" : "6.0.0",
  "name" : "submit-measurement",
  "title" : "Submit measurement",
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
  "description" : "The submit-measurement operation provides a single measurement in the form of a Bundle of Observation, QuestionnaireResponse and Media for storage and, subsequently, further processing in the eHealth Infrastructure. A Provenance resource is implicitly created by the infrastructure referencing input Bundle resources as target, thereby relating the resources that were submitted. \n\nMedia resource inline content in `content.data` will be stored outside the resource, and the `content.url` for retrieval is set on the resource. Image content is anonymized by removing sensitive metadate before storage. Image content is processed to generate thumbnail representations in the thumbnail element. \n\n\n### Parameter description\nmeasurement: Bundle containing:\n- 0..* Observation (ehealth-observation profile)\n- 0..* QuestionnaireResponse (ehealth-questionnaireresponse profile)\n- 0..* Media (ehealth-media profile)\n- 0..* Provenance (ehealth-provenance profile). Each Provenance (which is intended for capturing reuse of measurement(s) – as described in the eHealth Observation profile introduction) must refer to other resources in the Bundle as target in the format \"urn:oid:<the oid>\" or \"urn:uuid:<the uuid>.\".\n\nAll resources in the Bundle must refer to the same Patient and EpisodeOfCare.\nAll measurement resources in the Bundle must have status either `completed` or `final` (`completed` in case of Media/QuestionnaireResponse and `final` in case of Observation).\nAll resources in the Bundle as well as the created Provenance will receive any missing system tags (ehealth-system CodeSystem) provided by the referenced EpisodeOfCare.\nThe request will be denied if any resource in the Bundle contains a system tag, which is not present on the referenced EpisodeOfCare\n\n\n### Output description\nThe returned Bundle contains references to the stored input resources where the id has been substituted.\n\neHealth infrastructure will substitute the id when saving the resources in a single transaction.",
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
  "code" : "submit-measurement",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [
    {
      "name" : "measurement",
      "use" : "in",
      "min" : 0,
      "max" : "1",
      "type" : "Bundle"
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
