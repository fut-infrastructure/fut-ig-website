# DK_IHE_FormatCode_VS - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK_IHE_FormatCode_VS**

## ValueSet: DK_IHE_FormatCode_VS 

| | |
| :--- | :--- |
| *Official URL*:http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-formatcode-vs | *Version*:6.0.0 |
| Active as of 2019-12-11 | *Computable Name*:DK_IHE_FormatCode_VS |

 
Value set for document format code used in national Document sharing. 

 **References** 

* Included into [FormatCodes](ValueSet-ehealth-format-codes.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "dk-ihe-formatcode-vs",
  "url" : "http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-formatcode-vs",
  "version" : "6.0.0",
  "name" : "DK_IHE_FormatCode_VS",
  "title" : "DK_IHE_FormatCode_VS",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-12-11T00:00:00+00:00",
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
  "description" : "Value set for document format code used in national Document sharing.",
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
  "compose" : {
    "include" : [
      {
        "system" : "urn:oid:1.2.208.184.100.10",
        "concept" : [
          {
            "code" : "urn:ad:dk:medcom:apd-v2.0.1:full",
            "display" : "DK APD schema"
          },
          {
            "code" : "urn:ad:dk:medcom:appointmentsummary:full",
            "display" : "DK Appointment Summary Document schema"
          },
          {
            "code" : "urn:ad:dk:medcom:cmr-v1.0:full",
            "display" : "DK CMR schema"
          },
          {
            "code" : "urn:ad:dk:medcom:cpd-v1.0.1:full",
            "display" : "DK CPD schema"
          },
          {
            "code" : "urn:ad:dk:medcom:sds:cpd-v1.0.1:maternity",
            "display" : "DK CPD schema for maternity"
          },
          {
            "code" : "urn:ad:dk:medcom:labreports:svareksponeringsservice",
            "display" : "Laboratoriesvar (samling af svar)"
          },
          {
            "code" : "urn:ad:dk:medcom:pdc-v2.0:full",
            "display" : "DK PDC schema"
          },
          {
            "code" : "urn:ad:dk:medcom:phmr-v1.3:full",
            "display" : "DK PHMR schema"
          },
          {
            "code" : "urn:ad:dk:medcom:phmr-v2.1:full",
            "display" : "DK PHMR schema"
          },
          {
            "code" : "urn:ad:dk:medcom:prvs-v1.0:full",
            "display" : "DK PRVS schema"
          },
          {
            "code" : "urn:ad:dk:medcom:qfdd-v1.1:full",
            "display" : "DK QFDD schema"
          },
          {
            "code" : "urn:ad:dk:medcom:qfdd-v1.2:full",
            "display" : "DK QFDD schema"
          },
          {
            "code" : "urn:ad:dk:medcom:qrd-v1.1:full",
            "display" : "DK QRD schema"
          },
          {
            "code" : "urn:ad:dk:medcom:qrd-v1.2:full",
            "display" : "DK QRD schema"
          },
          {
            "code" : "urn:ad:dk:medcom:qrd-v1.3:full",
            "display" : "DK QRD schema"
          },
          {
            "code" : "urn:ad:dk:medcom:pdc-v3.0:full",
            "display" : "DK PDC schema"
          },
          {
            "code" : "urn:ad:dk:medcom:cpd-v2.0:full",
            "display" : "DK CPD schema"
          },
          {
            "code" : "urn:ad:dk:medcom:phad-v1.0:ful",
            "display" : "DK PHAD schema"
          }
        ]
      }
    ]
  }
}

```
