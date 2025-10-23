# Consent State Codes - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Consent State Codes**

## CodeSystem: Consent State Codes 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org/fhir/consent-state-codes | *Version*:6.0.0 | |
| *Standards status:*[Trial-use](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 2 | *Computable Name*:ConsentState |

 
Indicates the state of the consent 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

This code system supplement `http://hl7.org/fhir/consent-state-codes` defines displays on the following codes:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "hl7.org-fhir-consent-state-codes",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-wg",
      "valueCode" : "cbcc"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
      "valueCode" : "trial-use"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 2
    }
  ],
  "url" : "http://hl7.org/fhir/consent-state-codes",
  "version" : "6.0.0",
  "name" : "ConsentState",
  "title" : "Consent State Codes",
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
  "description" : "Indicates the state of the consent",
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
  "supplements" : "http://hl7.org/fhir/consent-state-codes",
  "concept" : [
    {
      "code" : "draft",
      "display" : "Pending",
      "definition" : "The consent is in development or awaiting use but is not yet intended to be acted upon.",
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
      "code" : "proposed",
      "display" : "Proposed",
      "definition" : "The consent has been proposed but not yet agreed to by all parties. The negotiation stage.",
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
      "definition" : "The consent is to be followed and enforced.",
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
      "code" : "rejected",
      "display" : "Rejected",
      "definition" : "The consent has been rejected by one or more of the parties.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Afvist"
        }
      ]
    },
    {
      "code" : "inactive",
      "display" : "Inactive",
      "definition" : "The consent is terminated or replaced.",
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
      "display" : "Entered in Error",
      "definition" : "The consent was created wrongly (e.g. wrong patient) and should be ignored",
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
