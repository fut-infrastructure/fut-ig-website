# Patient contact note - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Patient contact note**

## Extension: Patient contact note 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient-contactnote | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*:ehealth-patient-contactnote |

This note holds the information of when the patient is available for communication - eg. between 10 and 12 every monday

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-patient](StructureDefinition-ehealth-patient.md) and [ehealth-relatedperson](StructureDefinition-ehealth-relatedperson.md)
* Examples for this Extension: [RelatedPerson/relatedperson01](RelatedPerson-relatedperson01.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-patient-contactnote.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-patient-contactnote.csv), [Excel](StructureDefinition-ehealth-patient-contactnote.xlsx), [Schematron](StructureDefinition-ehealth-patient-contactnote.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-patient-contactnote",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient-contactnote",
  "version" : "10.0.2",
  "name" : "ehealth-patient-contactnote",
  "title" : "Patient contact note",
  "status" : "active",
  "date" : "2026-09-10T10:12:06+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "This note holds the information of when the patient is available for communication - eg. between 10 and 12 every monday",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "Element"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Note regarding patient contact",
      "definition" : "This note holds the information of when the patient is available for communication - eg. between 10 and 12 every monday"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient-contactnote"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
