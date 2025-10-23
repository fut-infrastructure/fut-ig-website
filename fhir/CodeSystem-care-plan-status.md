# Care Plan Status - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Care Plan Status**

## CodeSystem: Care Plan Status 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org/fhir/care-plan-status | *Version*:6.0.0 | |
| Active as of 2019-10-24 | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 2 | *Computable Name*:Care Plan Status |

 
Indicates whether the plan is currently being acted upon, represents future intentions, or is now a historical record. 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

Last updated: 2019-10-24 11:53:00+1100

This code system supplement `http://hl7.org/fhir/care-plan-status` defines displays on the following codes:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "care-plan-status",
  "meta" : {
    "lastUpdated" : "2019-10-24T11:53:00+11:00"
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-ballot-status",
      "valueString" : "Informative"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 2
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-wg",
      "valueCode" : "pc"
    }
  ],
  "url" : "http://hl7.org/fhir/care-plan-status",
  "version" : "6.0.0",
  "name" : "Care Plan Status",
  "title" : "Care Plan Status",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-10-24T11:53:00+11:00",
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
  "description" : "Indicates whether the plan is currently being acted upon, represents future intentions, or is now a historical record.",
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
      "definition" : "The plan is in development or awaiting use but is not yet intended to be acted upon.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Under udarbejdelse"
        }
      ]
    },
    {
      "code" : "active",
      "display" : "Active",
      "definition" : "The plan is intended to be followed and used as part of patient care.",
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
      "definition" : "The plan has been temporarily stopped but is expected to resume in the future.",
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
      "code" : "completed",
      "display" : "Completed",
      "definition" : "The plan is no longer in use and is not expected to be followed or used in patient care.",
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
      "display" : "Entered In Error",
      "definition" : "The plan was entered in error and voided.",
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
      "code" : "revoked",
      "display" : "Revoked",
      "definition" : "The plan has been terminated prior to reaching completion (though it may have been replaced by a new plan).",
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
      "code" : "unknown",
      "display" : "Unknown",
      "definition" : "The authoring system doesn't know the current state of the care plan.",
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
