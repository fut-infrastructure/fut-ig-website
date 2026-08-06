# eHealth Message Author - eHealth Infrastructure v10.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Message Author**

## Extension: eHealth Message Author 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-message-author | *Version*:10.0.0 |
| Active as of 2026-08-06 | *Computable Name*:ehealth-message-author |

Records the attorney (RelatedPerson) who authored a message on behalf of the grantor patient, for cases where the physical author is not the same as Communication.sender. When a RELATED_PERSON user sends a message, Communication.sender must still reference the grantor patient, and this extension must reference the acting RelatedPerson. In future, the target list may be extended to include Practitioner references (e.g. for messages sent by a CareTeam member), but for now only RelatedPerson is supported.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-message](StructureDefinition-ehealth-message.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-message-author.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-message-author.csv), [Excel](StructureDefinition-ehealth-message-author.xlsx), [Schematron](StructureDefinition-ehealth-message-author.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-message-author",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-message-author",
  "version" : "10.0.0",
  "name" : "ehealth-message-author",
  "title" : "eHealth Message Author",
  "status" : "active",
  "date" : "2026-08-06T13:17:54+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Records the attorney (RelatedPerson) who authored a message on behalf of the grantor patient, for cases where the physical author is not the same as Communication.sender. When a RELATED_PERSON user sends a message, Communication.sender must still reference the grantor patient, and this extension must reference the acting RelatedPerson. In future, the target list may be extended to include Practitioner references (e.g. for messages sent by a CareTeam member), but for now only RelatedPerson is supported.",
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
      "short" : "Attorney who authored the message",
      "definition" : "Records the attorney (RelatedPerson) who authored a message on behalf of the grantor patient, for cases where the physical author is not the same as Communication.sender. When a RELATED_PERSON user sends a message, Communication.sender must still reference the grantor patient, and this extension must reference the acting RelatedPerson. In future, the target list may be extended to include Practitioner references (e.g. for messages sent by a CareTeam member), but for now only RelatedPerson is supported."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-message-author"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/RelatedPerson"],
        "aggregation" : ["referenced"]
      }]
    }]
  }
}

```
