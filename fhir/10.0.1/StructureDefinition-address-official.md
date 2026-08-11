# Official Address - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Official Address**

## Extension: Official Address 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org/fhir/StructureDefinition/address-official | *Version*:10.0.1 | |
| * Standards status: *[Trial-use](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 1 | *Computable Name*:OfficialAddress |
| *Other Identifiers:*OID:2.16.840.1.113883.4.642.5.1657 | | |

Indicate that this address is meant to be the 'official' address for that person. What an 'official' address is depends on the country. This extension allows to specify if this address is or it is not the official address, or to indicate that this is the official address for that country.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Danish Core Patient Profile](http://hl7.dk/fhir/core/3.6.0/StructureDefinition-dk-core-patient.html)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/StructureDefinition-address-official.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-address-official.csv), [Excel](StructureDefinition-address-official.xlsx), [Schematron](StructureDefinition-address-official.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "address-official",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-wg",
    "valueCode" : "fhir"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
    "valueCode" : "trial-use"
  },
  {
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-type-characteristics",
    "valueCode" : "can-bind"
  }],
  "url" : "http://hl7.org/fhir/StructureDefinition/address-official",
  "identifier" : [{
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:oid:2.16.840.1.113883.4.642.5.1657"
  }],
  "version" : "10.0.1",
  "name" : "OfficialAddress",
  "title" : "Official Address",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-04-18",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Indicate that this address is meant to be the 'official' address for that person. What an 'official' address is depends on the country. This extension allows to specify if this address is or it is not the official address, or to indicate that this is the official address for that country.",
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
    "expression" : "Address"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Official Address",
      "definition" : "This extension allows to specify if this address is or it is not the official address, or to indicate that this is the official address for that country (true assumed).  Note: It does not make sense to repeat this extension without the valueCodeableConcept to specify jurisdictions."
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org/fhir/StructureDefinition/address-official",
      "mapping" : [{
        "identity" : "rim",
        "map" : "AD/@use[.='OR']"
      }]
    },
    {
      "id" : "Extension.valueBoolean:valueBoolean",
      "path" : "Extension.valueBoolean",
      "sliceName" : "valueBoolean",
      "short" : "Official address true/false",
      "definition" : "It specifies if this address is or it is not the official address.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "boolean"
      }]
    },
    {
      "id" : "Extension.valueCodeableConcept:valueCodeableConcept",
      "path" : "Extension.valueCodeableConcept",
      "sliceName" : "valueCodeableConcept",
      "short" : "Official address for country X",
      "definition" : "It specifies that this address is the official address for the indicated country.",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://terminology.hl7.org/ValueSet/jurisdiction"
      }
    }]
  }
}

```
