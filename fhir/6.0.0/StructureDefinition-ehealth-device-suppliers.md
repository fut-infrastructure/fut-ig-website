# Suppliers - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Suppliers**

## Extension: Suppliers 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-suppliers | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-device-suppliers |

Suppliers of different kinds. E.g device suppliers, support suppliers, training suppliers, etc.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [ehealth-device](StructureDefinition-ehealth-device.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-device-suppliers)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-device-suppliers.csv), [Excel](StructureDefinition-ehealth-device-suppliers.xlsx), [Schematron](StructureDefinition-ehealth-device-suppliers.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-device-suppliers",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-suppliers",
  "version" : "6.0.0",
  "name" : "ehealth-device-suppliers",
  "title" : "Suppliers",
  "status" : "active",
  "date" : "2025-10-23T10:25:37+00:00",
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
  "description" : "Suppliers of different kinds. E.g device suppliers, support suppliers, training suppliers, etc.",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "Element"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "Different types of suppliers for a device.",
        "definition" : "Suppliers of different kinds. E.g device suppliers, support suppliers, training suppliers, etc."
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "min" : 2
      },
      {
        "id" : "Extension.extension:supplier",
        "path" : "Extension.extension",
        "sliceName" : "supplier",
        "min" : 1,
        "max" : "1"
      },
      {
        "id" : "Extension.extension:supplier.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:supplier.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "supplier"
      },
      {
        "id" : "Extension.extension:supplier.value[x]",
        "path" : "Extension.extension.value[x]",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-organization",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-practitioner",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-patient",
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-relatedperson"
            ]
          }
        ]
      },
      {
        "id" : "Extension.extension:role",
        "path" : "Extension.extension",
        "sliceName" : "role",
        "min" : 1,
        "max" : "*"
      },
      {
        "id" : "Extension.extension:role.extension",
        "path" : "Extension.extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.extension:role.url",
        "path" : "Extension.extension.url",
        "fixedUri" : "role"
      },
      {
        "id" : "Extension.extension:role.value[x]",
        "path" : "Extension.extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "CodeableConcept"
          }
        ],
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://ehealth.sundhed.dk/vs/device-supplier-roles"
        }
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-device-suppliers"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "max" : "0"
      }
    ]
  }
}

```
