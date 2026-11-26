# Closing - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Closing**

## ActivityDefinition: Closing 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-closing | *Version*:1.0.0 |
| Active as of 2026-11-26 | *Computable Name*: |
| *Other Identifiers:*UUID:a10b1a43-be04-490e-bd03-b2de793846c8 | |
| **Usage**: Clinical Focus: Kronisk obstruktiv lungesygdom | |

* **Code: **: **Id: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: ad-closing
* **Code: **: **Version: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: 1.0.0
* **Code: **: ** **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007:  urn:uuid:a10b1a43-be04-490e-bd03-b2de793846c8 
* **Code: **: **Date (date last changed): **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: 2026-11-26 14:31:33+0000
* **Code: **: **Publisher (steward): **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: Den telemedicinske infrastruktur (eHealth Infrastructure)
* **Code: **: **Topic: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: self-treatment
* **Code: **: **Documentation: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **409073007: ```` Tak for din besvarelse. Vi kontakter dig, hvis vi vurderer, at der på baggrund af dine målinger og registreringer, er brug for dette.````



## Resource Content

```json
{
  "resourceType" : "ActivityDefinition",
  "id" : "ad-closing",
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
      "value" : "urn:uuid:2bd8547d-e267-41ed-8ef8-d1d1a59cc4a2",
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
    "valueString" : "Afrunding"
  }],
  "url" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-closing",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:a10b1a43-be04-490e-bd03-b2de793846c8"
  }],
  "version" : "1.0.0",
  "title" : "Afrunding",
  "status" : "active",
  "date" : "2026-11-26T14:31:33+00:00",
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
      "data" : "ClRhayBmb3IgZGluIGJlc3ZhcmVsc2UuCgpWaSBrb250YWt0ZXIgZGlnLCBodmlzIHZpIHZ1cmRlcmVyLCBhdCBkZXIgcMOlIGJhZ2dydW5kIGFmIGRpbmUgbcOlbGluZ2VyIG9nIHJlZ2lzdHJlcmluZ2VyLCBlciBicnVnIGZvciBkZXR0ZS4="
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
