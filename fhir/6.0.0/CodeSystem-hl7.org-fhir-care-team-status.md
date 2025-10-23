# Care Team Status - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Care Team Status**

## CodeSystem: Care Team Status 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org/fhir/care-team-status | *Version*:6.0.0 | |
| *Standards status:*[Normative](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 5 | *Computable Name*:CareTeamStatus |

 
Indicates the status of the care team. 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

This code system supplement `http://hl7.org/fhir/care-team-status` defines displays on the following codes:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "hl7.org-fhir-care-team-status",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-wg",
      "valueCode" : "fhir"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
      "valueCode" : "normative"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-normative-version",
      "valueCode" : "4.0.0"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 5
    }
  ],
  "url" : "http://hl7.org/fhir/care-team-status",
  "version" : "6.0.0",
  "name" : "CareTeamStatus",
  "title" : "Care Team Status",
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
  "description" : "Indicates the status of the care team.",
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
  "supplements" : "http://hl7.org/fhir/care-team-status",
  "concept" : [
    {
      "code" : "proposed",
      "display" : "Proposed",
      "definition" : "The care team has been drafted and proposed, but not yet participating in the coordination and delivery of care.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Forslag"
        }
      ]
    },
    {
      "code" : "active",
      "display" : "Active",
      "definition" : "The care team is currently participating in the coordination and delivery of care.",
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
      "code" : "suspended",
      "display" : "Suspended",
      "definition" : "The care team is temporarily on hold or suspended and not participating in the coordination and delivery of care.",
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
      "code" : "inactive",
      "display" : "Inactive",
      "definition" : "The care team was, but is no longer, participating in the coordination and delivery of care.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Inaktiv"
        }
      ]
    },
    {
      "code" : "entered-in-error",
      "display" : "Entered In Error",
      "definition" : "The care team should have never existed.",
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
    }
  ]
}

```
