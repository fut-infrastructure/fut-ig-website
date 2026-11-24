# Oxygen saturation and pulse measurement - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Oxygen saturation and pulse measurement**

## ActivityDefinition: Oxygen saturation and pulse measurement 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-sat-pulse-intro | *Version*:0.2.0 |
| Active as of 2026-11-24 | *Computable Name*: |
| *Other Identifiers:*UUID:06685e0e-b912-466a-a2ef-d5911bd4c00e | |
| **Usage**: Clinical Focus: Kronisk obstruktiv lungesygdom | |

* **Code: **: **Id: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: ad-sat-pulse-intro
* **Code: **: **Version: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: 0.2.0
* **Code: **: ** **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007:  urn:uuid:06685e0e-b912-466a-a2ef-d5911bd4c00e 
* **Code: **: **Date (date last changed): **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: 2026-11-24 14:40:18+0000
* **Code: **: **Publisher (steward): **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: Den telemedicinske infrastruktur (eHealth Infrastructure)
* **Code: **: **Topic: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: self-treatment
* **Code: **: **Documentation: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.1/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: ````Du skal nu måle din iltmætning og puls. Start med at tage hånden op til halsen og mærk om dine fingre er varme. Hvis dine fingre er kolde, skal du varme dem op ved f.eks. * At placere hånden i armhulen * At gnide hænderne mod hinanden Når dine fingre føles varme, kan du foretage målingen. <br> Tryk på "videre"````



## Resource Content

```json
{
  "resourceType" : "ActivityDefinition",
  "id" : "ad-sat-pulse-intro",
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
      "value" : "urn:uuid:70d3654c-fb75-4ec2-a9bc-02d062b8e6d8",
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
    "valueString" : "Måling af iltmætning og puls"
  }],
  "url" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-sat-pulse-intro",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:06685e0e-b912-466a-a2ef-d5911bd4c00e"
  }],
  "version" : "0.2.0",
  "title" : "Måling af iltmætning og puls",
  "status" : "active",
  "date" : "2026-11-24T14:40:18+00:00",
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
      "data" : "RHUgc2thbCBudSBtw6VsZSBkaW4gaWx0bcOmdG5pbmcgb2cgcHVscy4KClN0YXJ0IG1lZCBhdCB0YWdlIGjDpW5kZW4gb3AgdGlsIGhhbHNlbiBvZyBtw6ZyayBvbSBkaW5lIGZpbmdyZSBlciB2YXJtZS4KCkh2aXMgZGluZSBmaW5ncmUgZXIga29sZGUsIHNrYWwgZHUgdmFybWUgZGVtIG9wIHZlZCBmLmVrcy4KCiogQXQgcGxhY2VyZSBow6VuZGVuIGkgYXJtaHVsZW4KKiBBdCBnbmlkZSBow6ZuZGVybmUgbW9kIGhpbmFuZGVuCgpOw6VyIGRpbmUgZmluZ3JlIGbDuGxlcyB2YXJtZSwga2FuIGR1IGZvcmV0YWdlIG3DpWxpbmdlbi4KCjxicj4KVHJ5ayBww6UgInZpZGVyZSI="
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
