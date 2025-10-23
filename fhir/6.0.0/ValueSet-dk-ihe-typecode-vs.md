# DK_IHE_TypeCode_VS - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK_IHE_TypeCode_VS**

## ValueSet: DK_IHE_TypeCode_VS 

| | |
| :--- | :--- |
| *Official URL*:http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-typecode-vs | *Version*:6.0.0 |
| Active as of 2019-12-11 | *Computable Name*:DK_IHE_TypeCode_VS |

 
Value set for the typeCode attribute. The typeCode specifies the precise type of document from the user perspective. The granularity of typeCode is finer grained than its superior classCode. 

 **References** 

* Included into [DocumentType](ValueSet-ehealth-document-type.md)

### Logical Definition (CLD)

 

### Expansion

Expansion from tx.fhir.org based on:

* Loinc v2.81
* [codesystem MedCom Message Codes v6.0.0 (CodeSystem)](CodeSystem-urn-oid-1.2.208.184.100.1.md)

This value set contains 14 concepts

**Additional Designations and Language Displays**

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
  "id" : "dk-ihe-typecode-vs",
  "url" : "http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-typecode-vs",
  "version" : "6.0.0",
  "name" : "DK_IHE_TypeCode_VS",
  "title" : "DK_IHE_TypeCode_VS",
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
  "description" : "Value set for the typeCode attribute. The typeCode specifies the precise type of document from the user perspective. The granularity of typeCode is finer grained than its superior classCode.",
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
        "system" : "http://loinc.org",
        "concept" : [
          {
            "code" : "103140-0",
            "display" : "Personal health attachment Document",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Personal health attachment Document"
              }
            ]
          },
          {
            "code" : "53576-5",
            "display" : "Personal health monitoring report Document",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Personal health monitoring report Document"
              }
            ]
          },
          {
            "code" : "74468-0",
            "display" : "Questionnaire Form Definition Document",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Questionnaire Form Definition Document"
              }
            ]
          },
          {
            "code" : "74465-6",
            "display" : "Questionnaire Response Document",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Questionnaire Response Document"
              }
            ]
          },
          {
            "code" : "11502-2",
            "display" : "LABORATORY REPORT.TOTAL",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "LABORATORY REPORT.TOTAL"
              }
            ]
          },
          {
            "code" : "56446-8",
            "display" : "Appointment Summary Document",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Appointment Summary Document"
              }
            ]
          },
          {
            "code" : "39290-2",
            "display" : "Follow-up (referred to) program, appointment date",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Follow-up (referred to) program, appointment date"
              }
            ]
          },
          {
            "code" : "39289-4",
            "display" : "Follow-up (referred to) provider and/or specialist, appointment date",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Follow-up (referred to) provider and/or specialist, appointment date"
              }
            ]
          },
          {
            "code" : "81215-6",
            "display" : "Care plan - recommended C-CDA R2.0 and R2.1 sections",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Care plan - recommended C-CDA R2.0 and R2.1 sections"
              }
            ]
          },
          {
            "code" : "57059-8",
            "display" : "Pregnancy visit summary note Narrative",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Summary for prenancy visit"
              }
            ]
          },
          {
            "code" : "28615-3",
            "display" : "Audiology Study",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "DA: Audiologi dokument"
              }
            ]
          }
        ]
      },
      {
        "system" : "urn:oid:1.2.208.184.100.1",
        "concept" : [
          {
            "code" : "CMR",
            "display" : "Clinical Mesurement Report"
          },
          {
            "code" : "PDC",
            "display" : "Stamkort"
          },
          {
            "code" : "MADC",
            "display" : "MADC"
          }
        ]
      }
    ]
  }
}

```
