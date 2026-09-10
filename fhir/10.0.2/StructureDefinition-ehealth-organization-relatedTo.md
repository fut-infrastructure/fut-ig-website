# Related to - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Related to**

## Extension: Related to 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-relatedTo | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*:ehealth-organization-relatedTo |

Relations to other Organizations

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-organization](StructureDefinition-ehealth-organization.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-ehealth-organization-relatedTo.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-organization-relatedTo.csv), [Excel](StructureDefinition-ehealth-organization-relatedTo.xlsx), [Schematron](StructureDefinition-ehealth-organization-relatedTo.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-organization-relatedTo",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-relatedTo",
  "version" : "10.0.2",
  "name" : "ehealth-organization-relatedTo",
  "title" : "Related to",
  "status" : "active",
  "date" : "2026-09-10T10:04:36+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Relations to other Organizations",
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
      "short" : "Relations to other Organizations",
      "definition" : "Relations to other Organizations"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "min" : 3
    },
    {
      "id" : "Extension.extension:target",
      "path" : "Extension.extension",
      "sliceName" : "target",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:target.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:target.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "target"
    },
    {
      "id" : "Extension.extension:target.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "base64Binary",
        "targetProfile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization"]
      },
      {
        "code" : "boolean"
      },
      {
        "code" : "canonical"
      },
      {
        "code" : "code"
      },
      {
        "code" : "date"
      },
      {
        "code" : "dateTime"
      },
      {
        "code" : "decimal"
      },
      {
        "code" : "id"
      },
      {
        "code" : "instant"
      },
      {
        "code" : "integer"
      },
      {
        "code" : "markdown"
      },
      {
        "code" : "oid"
      },
      {
        "code" : "positiveInt"
      },
      {
        "code" : "string"
      },
      {
        "code" : "time"
      },
      {
        "code" : "unsignedInt"
      },
      {
        "code" : "uri"
      },
      {
        "code" : "url"
      },
      {
        "code" : "uuid"
      },
      {
        "code" : "Address"
      },
      {
        "code" : "Age"
      },
      {
        "code" : "Annotation"
      },
      {
        "code" : "Attachment"
      },
      {
        "code" : "CodeableConcept"
      },
      {
        "code" : "Coding"
      },
      {
        "code" : "ContactPoint"
      },
      {
        "code" : "Count"
      },
      {
        "code" : "Distance"
      },
      {
        "code" : "Duration"
      },
      {
        "code" : "HumanName"
      },
      {
        "code" : "Identifier"
      },
      {
        "code" : "Money"
      },
      {
        "code" : "Period"
      },
      {
        "code" : "Quantity"
      },
      {
        "code" : "Range"
      },
      {
        "code" : "Ratio"
      },
      {
        "code" : "Reference"
      },
      {
        "code" : "SampledData"
      },
      {
        "code" : "Signature"
      },
      {
        "code" : "Timing"
      },
      {
        "code" : "ContactDetail"
      },
      {
        "code" : "Contributor"
      },
      {
        "code" : "DataRequirement"
      },
      {
        "code" : "Expression"
      },
      {
        "code" : "ParameterDefinition"
      },
      {
        "code" : "RelatedArtifact"
      },
      {
        "code" : "TriggerDefinition"
      },
      {
        "code" : "UsageContext"
      },
      {
        "code" : "Dosage"
      },
      {
        "code" : "Meta"
      }]
    },
    {
      "id" : "Extension.extension:relationType",
      "path" : "Extension.extension",
      "sliceName" : "relationType",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:relationType.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:relationType.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "relationType"
    },
    {
      "id" : "Extension.extension:relationType.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://ehealth.sundhed.dk/vs/organization-relation-type"
      }
    },
    {
      "id" : "Extension.extension:period",
      "path" : "Extension.extension",
      "sliceName" : "period",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:period.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:period.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "period"
    },
    {
      "id" : "Extension.extension:period.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "Period"
      }]
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization-relatedTo"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
