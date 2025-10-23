# Address Use - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Address Use**

## CodeSystem: Address Use 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org/fhir/address-use | *Version*:6.0.0 | |
| *Standards status:*[Normative](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 5 | *Computable Name*:AddressUse |

 
The use of an address 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

This code system supplement `http://hl7.org/fhir/address-use` defines displays on the following codes:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "hl7.org-fhir-address-use",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-wg",
      "valueCode" : "fhir"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
      "valueCode" : "normative"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-normative-version",
      "valueCode" : "4.0.0"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 5
    }
  ],
  "url" : "http://hl7.org/fhir/address-use",
  "version" : "6.0.0",
  "name" : "AddressUse",
  "title" : "Address Use",
  "status" : "active",
  "experimental" : false,
  "date" : "2021-10-27T13:27:27+00:00",
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
  "description" : "The use of an address",
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
  "content" : "supplement",
  "supplements" : "http://hl7.org/fhir/address-use",
  "concept" : [
    {
      "code" : "home",
      "display" : "Home",
      "definition" : "A communication address at a home.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Hjem"
        }
      ]
    },
    {
      "code" : "work",
      "display" : "Work",
      "definition" : "An office address. First choice for business related contacts during business hours.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Arbejde"
        }
      ]
    },
    {
      "code" : "temp",
      "display" : "Temporary",
      "definition" : "A temporary address. The period can provide more detailed information.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Midlertidig"
        }
      ]
    },
    {
      "code" : "old",
      "display" : "Old / Incorrect",
      "definition" : "This address is no longer in use (or was never correct, but retained for records).",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Gammel / forkert"
        }
      ]
    }
  ]
}

```
