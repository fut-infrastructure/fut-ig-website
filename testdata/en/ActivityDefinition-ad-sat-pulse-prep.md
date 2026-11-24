# Preparation - FUT test data v0.1.6

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Preparation**

## ActivityDefinition: Preparation 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-sat-pulse-prep | *Version*:0.1.6 |
| Active as of 2026-11-24 | *Computable Name*: |
| *Other Identifiers:*UUID:713d6191-d8ed-4024-b2e9-feee2f77120c | |
| **Usage**: Clinical Focus: Kronisk obstruktiv lungesygdom | |

* **Code: **: **Id: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: ad-sat-pulse-prep
* **Code: **: **Version: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: 0.1.6
* **Code: **: ** **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007:  urn:uuid:713d6191-d8ed-4024-b2e9-feee2f77120c 
* **Code: **: **Date (date last changed): **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: 2026-11-24 14:20:56+0000
* **Code: **: **Publisher (steward): **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: Den telemedicinske infrastruktur (eHealth Infrastructure)
* **Code: **: **Topic: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: self-treatment
* **Code: **: **Documentation: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: ```` Sid i ro ca. 5 min før, at du begynder målingen. Husk at holde fingeren i ro under målingen, læg f.eks. hånden på bordet. Tryk på "videre"````



## Resource Content

```json
{
  "resourceType" : "ActivityDefinition",
  "id" : "ad-sat-pulse-prep",
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
      "value" : "urn:uuid:f11af78e-4841-4f6c-b254-f6a27e605673",
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
    "valueString" : "Forberedelse"
  }],
  "url" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-sat-pulse-prep",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:713d6191-d8ed-4024-b2e9-feee2f77120c"
  }],
  "version" : "0.1.6",
  "title" : "Forberedelse",
  "status" : "active",
  "date" : "2026-11-24T14:20:56+00:00",
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
      "data" : "ClNpZCBpIHJvIGNhLiA1IG1pbiBmw7hyLCBhdCBkdSBiZWd5bmRlciBtw6VsaW5nZW4uCkh1c2sgYXQgaG9sZGUgZmluZ2VyZW4gaSBybyB1bmRlciBtw6VsaW5nZW4sIGzDpmcgZi5la3MuIGjDpW5kZW4gcMOlIGJvcmRldC4KClRyeWsgcMOlICJ2aWRlcmUi"
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
