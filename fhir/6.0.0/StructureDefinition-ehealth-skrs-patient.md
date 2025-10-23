# ehealth-skrs-patient - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ehealth-skrs-patient**

## Resource Profile: ehealth-skrs-patient 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-skrs-patient | *Version*:6.0.0 |
| Active as of 2025-10-23 | *Computable Name*:ehealth-skrs-patient |

**Usages:**

* Examples for this Profile: [Patient/291](Patient-291.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/dk.ehealth.sundhed.fhir.ig.core|current/StructureDefinition/ehealth-skrs-patient)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ehealth-skrs-patient.csv), [Excel](StructureDefinition-ehealth-skrs-patient.xlsx), [Schematron](StructureDefinition-ehealth-skrs-patient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ehealth-skrs-patient",
  "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-skrs-patient",
  "version" : "6.0.0",
  "name" : "ehealth-skrs-patient",
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
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "loinc",
      "uri" : "http://loinc.org",
      "name" : "LOINC code for the element"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient",
        "path" : "Patient"
      },
      {
        "id" : "Patient.extension",
        "path" : "Patient.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Patient.extension:nameAndAddressProtection",
        "path" : "Patient.extension",
        "sliceName" : "nameAndAddressProtection",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-nameandaddressprotection"
            ]
          }
        ]
      },
      {
        "id" : "Patient.identifier",
        "path" : "Patient.identifier",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        },
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Patient.identifier:ehealth-dk-crn-identifier",
        "path" : "Patient.identifier",
        "sliceName" : "ehealth-dk-crn-identifier",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Identifier",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-cpr-identifier"
            ]
          }
        ]
      },
      {
        "id" : "Patient.deceased[x]",
        "path" : "Patient.deceased[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "rules" : "closed"
        }
      },
      {
        "id" : "Patient.deceased[x]:deceasedDateTime",
        "path" : "Patient.deceased[x]",
        "sliceName" : "deceasedDateTime",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "dateTime"
          }
        ]
      },
      {
        "id" : "Patient.address",
        "path" : "Patient.address",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "use"
            }
          ],
          "rules" : "closed"
        },
        "max" : "1"
      },
      {
        "id" : "Patient.address:officialHomeAddress",
        "path" : "Patient.address",
        "sliceName" : "officialHomeAddress",
        "min" : 0,
        "max" : "1"
      },
      {
        "id" : "Patient.address:officialHomeAddress.extension:municipalityCodes",
        "path" : "Patient.address.extension",
        "sliceName" : "municipalityCodes",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes"
            ]
          }
        ]
      },
      {
        "id" : "Patient.address:officialHomeAddress.extension:regionalSubDivisionCodes",
        "path" : "Patient.address.extension",
        "sliceName" : "regionalSubDivisionCodes",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-RegionalSubDivisionCodes"
            ]
          }
        ]
      },
      {
        "id" : "Patient.address:officialHomeAddress.use",
        "path" : "Patient.address.use",
        "min" : 1,
        "fixedCode" : "home"
      }
    ]
  }
}

```
