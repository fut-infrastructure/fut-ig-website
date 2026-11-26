# Extra questionnaire - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Extra questionnaire**

## ActivityDefinition: Extra questionnaire 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-extra-questionnaire | *Version*:1.0.0 |
| Active as of 2026-11-26 | *Computable Name*: |
| *Other Identifiers:*UUID:77bc2bc0-4d27-4fa6-a5fd-e9d1ac77f9aa | |
| **Usage**: Clinical Focus: Kronisk obstruktiv lungesygdom | |

* **Code: **: **Id: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **273586006: ad-extra-questionnaire
* **Code: **: **Version: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **273586006: 1.0.0
* **Code: **: ** **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **273586006:  urn:uuid:77bc2bc0-4d27-4fa6-a5fd-e9d1ac77f9aa 
* **Code: **: **Date (date last changed): **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **273586006: 2026-11-26 14:34:07+0000
* **Code: **: **Publisher (steward): **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **273586006: Den telemedicinske infrastruktur (eHealth Infrastructure)
* **Code: **: **Topic: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **273586006: self-treatment
* **Code: **: **Composed Of: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **273586006: * 410_KOL spørgeskema `[KOL spørgeskema](Questionnaire-questionnaire.md)`

* **Code: **: **Libraries: **
  * **system: **[http://ehealth.sundhed.dk/cs/activitydefinition-code](http://ehealth.sundhed.dk/fhir/11.0.5/CodeSystem-ehealth-activitydefinition-code.html)**code: **273586006: 
| |
| :--- |
| [Spørgeskematriagering](Library-library-questionnaire-triage.md) |




## Resource Content

```json
{
  "resourceType" : "ActivityDefinition",
  "id" : "ad-extra-questionnaire",
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
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingApprovalPolicy",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/measurement-sharing-approval-policies",
        "code" : "manual"
      }]
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-base",
    "valueIdentifier" : {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:1a85cf90-84aa-40d8-a231-315abe238f78",
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
    "valueString" : "Spørgeskema om tilstand og symptomer"
  }],
  "url" : "http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-extra-questionnaire",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:77bc2bc0-4d27-4fa6-a5fd-e9d1ac77f9aa"
  }],
  "version" : "1.0.0",
  "title" : "Spørgeskema om tilstand og symptomer",
  "status" : "active",
  "date" : "2026-11-26T14:34:07+00:00",
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
    "type" : "composed-of",
    "display" : "410_KOL spørgeskema",
    "resource" : "http://ehealth.sundhed.dk/testdata/Questionnaire/questionnaire"
  }],
  "library" : ["http://ehealth.sundhed.dk/testdata/Library/library-questionnaire-triage"],
  "code" : {
    "coding" : [{
      "system" : "http://ehealth.sundhed.dk/cs/activitydefinition-code",
      "code" : "273586006"
    }]
  }
}

```
