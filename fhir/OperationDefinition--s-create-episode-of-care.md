# Create an EpisodeOfCare - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Create an EpisodeOfCare**

## OperationDefinition: Create an EpisodeOfCare 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-create-episode-of-care | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:create-episode-of-care |

 
This operation persists an EpisodeOfCare based on the transient value of an EpisodeOfCare provided in the input. 

## Input

 
The input is a Bundle which must contain exactly one EpisodeOfCare, conditions referenced in diagnosis list and at least one Provenance resource. All Provenances in the input must have the EpisodeOfCare as target. At least one Provenance must be interpreted into a 'Privacy-provenance' (see below). 

### The EpisodeOfCare resource

 
The EpisodeOfCare has to have`PLANNED`status The 'id' property of the EpisodeOfCare will be reassigned by the server, but can be referenced by other resources in the same bundle. The 'managingOrganization' property of the EpisodeOfCare references the GDPR Data Controller (Danish: 'Dataansvarlig'). 

### The privacy-Provenance resource

 
A privacy-Provenance is a Provenance resource characterized by having at least one entry in Provenance.policy which data are transported, stored, or processed in the system. Possible values are: 
* 'http://ehealth.sundhed.dk/policy/dk/sundhedsloven'
* For any diagnosis listed, the referenced Condition must be concerning the same Patient as the EpisodeOfCare.


  For valid inputs, the server will create, persist and return a new EpisodeOfCare, client-supplied provenances, conditions and origin-provenance carrying a server-assigned ids. To get resources bodies in the output the request header has to contain parameter `Prefer: return=representation`.
* Whenever an EpisodeOfCare is created, the server automatically creates an 'origin' Provenance resource point to it (in addition to the client-supplied Privacy-Provenance). This Origin-Provenance resource is filled with data from the JWT access token in order to record the origin of the EpisodeOfCare resource. For instance agent.whoReference points to a resource which is created as a shadow identity from the JWT token.
 

URL: [base]/$create-episode-of-care

### Parameters

* **Use**: IN
  * **Name**: episodeOfCareAndProvenances
  * **Scope**: 
  * **Cardinality**: 1..1
  * **Type**: [Bundle](http://hl7.org/fhir/R4/bundle.html)
  * **Binding**: 
  * **Documentation**: 
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
  "id" : "-s-create-episode-of-care",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/-s-create-episode-of-care",
  "version" : "6.0.0",
  "name" : "create-episode-of-care",
  "title" : "Create an EpisodeOfCare",
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
  "description" : "This operation persists an EpisodeOfCare based on the transient value of an EpisodeOfCare provided in the input.\r\n## Input\r\nThe input is a Bundle which must contain exactly one EpisodeOfCare, conditions referenced in diagnosis list and at least one Provenance resource. All Provenances in the input must have the EpisodeOfCare as target. At least one Provenance must be interpreted into a 'Privacy-provenance' (see below).\r\n### The EpisodeOfCare resource\r\nThe EpisodeOfCare has to have `PLANNED` status \r\nThe 'id' property of the EpisodeOfCare will be reassigned by the server, but can be referenced by other resources in the same bundle. \r\nThe 'managingOrganization' property of the EpisodeOfCare references the GDPR Data Controller (Danish: 'Dataansvarlig').\r\n### The privacy-Provenance resource\r\nA privacy-Provenance is a Provenance resource characterized by having at least one entry in Provenance.policy which data are transported, stored, or processed in the system. Possible values are:\r\n- 'http://ehealth.sundhed.dk/policy/dk/sundhedsloven'\r\n- 'http://ehealth.sundhed.dk/policy/dk/serviceloven'\r\n### Diagnosis referenced Condition resource\r\nFor any diagnosis listed, the referenced Condition must be concerning the same Patient as the EpisodeOfCare.\r\n## Output\r\nFor valid inputs, the server will create, persist and return a new EpisodeOfCare, client-supplied provenances, conditions and origin-provenance carrying a server-assigned ids.\r\nTo get resources bodies in the output the request header has to contain parameter ```Prefer: return=representation```.\r\n## Validation\r\n- Patient.deceased must be false to create episode of care\r\n### The origin-Provenance resource\r\nWhenever an EpisodeOfCare is created, the server automatically creates an 'origin' Provenance resource point to it (in addition to the client-supplied Privacy-Provenance). This Origin-Provenance resource is filled with data from the JWT access token in order to record the origin of the EpisodeOfCare resource. For instance agent.whoReference points to a resource which is created as a shadow identity from the JWT token.\r\n",
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
  "code" : "create-episode-of-care",
  "system" : true,
  "type" : false,
  "instance" : false,
  "parameter" : [
    {
      "name" : "episodeOfCareAndProvenances",
      "use" : "in",
      "min" : 1,
      "max" : "1",
      "type" : "Bundle"
    },
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
