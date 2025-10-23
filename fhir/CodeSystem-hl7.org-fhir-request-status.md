# Request Status - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Request Status**

## CodeSystem: Request Status 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org/fhir/request-status | *Version*:6.0.0 | |
| *Standards status:*[Trial-use](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 4 | *Computable Name*:RequestStatus |

 
Codes identifying the stage lifecycle stage of a request 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

This code system supplement `http://hl7.org/fhir/request-status` defines displays on the following codes:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "hl7.org-fhir-request-status",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-wg",
      "valueCode" : "pc"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
      "valueCode" : "trial-use"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 4
    }
  ],
  "url" : "http://hl7.org/fhir/request-status",
  "version" : "6.0.0",
  "name" : "RequestStatus",
  "title" : "Request Status",
  "status" : "active",
  "experimental" : false,
  "date" : "2021-10-27T13:27:27+00:00",
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
  "description" : "Codes identifying the stage lifecycle stage of a request",
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
  "content" : "supplement",
  "supplements" : "http://hl7.org/fhir/request-status",
  "concept" : [
    {
      "code" : "draft",
      "display" : "Draft",
      "definition" : "The request has been created but is not yet complete or ready for action.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Udkast"
        }
      ]
    },
    {
      "code" : "active",
      "display" : "Active",
      "definition" : "The request is in force and ready to be acted upon.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Aktiv"
        }
      ]
    },
    {
      "code" : "on-hold",
      "display" : "On Hold",
      "definition" : "The request (and any implicit authorization to act) has been temporarily withdrawn but is expected to resume in the future.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Suspenderet"
        }
      ]
    },
    {
      "code" : "revoked",
      "display" : "Revoked",
      "definition" : "The request (and any implicit authorization to act) has been terminated prior to the known full completion of the intended actions. No further activity should occur.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Annulleret"
        }
      ]
    },
    {
      "code" : "completed",
      "display" : "Completed",
      "definition" : "The activity described by the request has been fully performed. No further activity will occur.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Afsluttet"
        }
      ]
    },
    {
      "code" : "entered-in-error",
      "display" : "Entered in Error",
      "definition" : "This request should never have existed and should be considered 'void'. (It is possible that real-world decisions were based on it. If real-world activity has occurred, the status should be \"revoked\" rather than \"entered-in-error\".).",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Fejlindtastning"
        }
      ]
    },
    {
      "code" : "unknown",
      "display" : "Unknown",
      "definition" : "The authoring system does not know which of the status values currently applies for this request.  Note: This concept is not to be used for \"other\"  - one of the listed statuses is presumed to apply, but the authoring/source system does not know which.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Ukendt"
        }
      ]
    }
  ]
}

```
