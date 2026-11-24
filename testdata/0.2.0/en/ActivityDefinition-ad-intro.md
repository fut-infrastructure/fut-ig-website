# Introduction - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Introduction**

## ActivityDefinition: Introduction 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-intro | *Version*:0.2.0 |
| Active as of 2026-11-24 | *Computable Name*: |
| *Other Identifiers:*UUID:bd470b20-6de0-4880-a9a7-5beeef3333ae | |
| **Usage**: Clinical Focus: Kronisk obstruktiv lungesygdom | |

* **Code: **: **Id: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: ad-intro
* **Code: **: **Version: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: 0.2.0
* **Code: **: ** **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007:  urn:uuid:bd470b20-6de0-4880-a9a7-5beeef3333ae 
* **Code: **: **Date (date last changed): **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: 2026-11-24 14:38:40+0000
* **Code: **: **Publisher (steward): **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: Den telemedicinske infrastruktur (eHealth Infrastructure)
* **Code: **: **Topic: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: self-treatment
* **Code: **: **Documentation: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: ````Du vil nu blive bedt om at lave forskellige målinger og svare på en række spørgsmål <br> Tryk på "videre" for at gå til første måling````



## Resource Content

```json
{
  "resourceType" : "ActivityDefinition",
  "id" : "ad-intro",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-activitydefinition"]
  },
  "extension" : [{
    "extension" : [{
      "url" : "reference",
      "valueReference" : {
        "reference" : "Organization/org-region-midtjylland"
      }
    },
    {
      "url" : "role",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://ehealth.sundhed.dk/cs/modifier-role",
          "code" : "owner"
        }]
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-modifier-role"
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/measurement-sharing-policies",
        "code" : "sharingAllowedDestinationNationalHealthData"
      }]
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-base-environment",
    "valueIdentifier" : {
      "system" : "http://ehealth.sundhed.dk/id/ehealth-environment",
      "value" : "dk.ehealth.sundhed.fhir.ig.testdata"
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-base",
    "valueIdentifier" : {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:371c78a3-cfd1-4d05-9436-d4218353ba17",
      "assigner" : {
        "identifier" : {
          "system" : "http://ehealth.sundhed.dk/id/ehealth-environment",
          "value" : "dk.ehealth.sundhed.fhir.ig.testdata"
        }
      }
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-employee-title",
    "valueString" : "Introduktion"
  }],
  "url" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-intro",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:bd470b20-6de0-4880-a9a7-5beeef3333ae"
  }],
  "version" : "0.2.0",
  "title" : "Introduktion",
  "status" : "active",
  "date" : "2026-11-24T14:38:40+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "useContext" : [{
    "code" : {
      "system" : "http://terminology.hl7.org/CodeSystem/usage-context-type",
      "code" : "focus"
    },
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "urn:oid:1.2.208.176.2.4",
        "code" : "DJ44",
        "display" : "Kronisk obstruktiv lungesygdom"
      }]
    }
  }],
  "topic" : [{
    "coding" : [{
      "system" : "http://ehealth.sundhed.dk/cs/topic-type",
      "code" : "self-treatment"
    }]
  }],
  "relatedArtifact" : [{
    "type" : "documentation",
    "document" : {
      "contentType" : "text/markdown",
      "data" : "RHUgdmlsIG51IGJsaXZlIGJlZHQgb20gYXQgbGF2ZSBmb3Jza2VsbGlnZSBtw6VsaW5nZXIgb2cgc3ZhcmUgcMOlIGVuIHLDpmtrZSBzcMO4cmdzbcOlbAoKPGJyPgpUcnlrIHDDpSAidmlkZXJlIiBmb3IgYXQgZ8OlIHRpbCBmw7hyc3RlIG3DpWxpbmc="
    }
  }],
  "code" : {
    "coding" : [{
      "system" : "http://ehealth.sundhed.dk/cs/activitydefinition-code",
      "code" : "409073007"
    }]
  }
}

```
