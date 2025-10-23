# Conditions - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Conditions**

## ValueSet: Conditions 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/conditions | *Version*:6.0.0 |
| Active as of 2019-02-08 | *Computable Name*:Conditions |

 
Conditions. 

 **References** 

* [ehealth-careteam](StructureDefinition-ehealth-careteam.md)
* [ehealth-condition](StructureDefinition-ehealth-condition.md)

### Logical Definition (CLD)

 

### Expansion

This value set contains 67 concepts

**Additional Designations**

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
  "id" : "ehealth-conditions",
  "url" : "http://ehealth.sundhed.dk/vs/conditions",
  "version" : "6.0.0",
  "name" : "Conditions",
  "title" : "Conditions",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-02-08T00:00:00+00:00",
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
  "description" : "Conditions.",
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
        "system" : "urn:oid:1.2.208.176.2.4",
        "concept" : [
          {
            "code" : "ALAL03",
            "display" : "Psykiske lidelser og adfærdsmæssige forstyrrelser"
          },
          {
            "code" : "DE10",
            "display" : "Type 1-diabetes"
          },
          {
            "code" : "DE11",
            "display" : "Type 2-diabetes"
          },
          {
            "code" : "DF00",
            "display" : "Demens ved Alzheimers sygdom"
          },
          {
            "code" : "DF10",
            "display" : "Psykiske lidelser og adfærdsmæssige forstyrrelser forårsaget af brug af alkohol"
          },
          {
            "code" : "DF20",
            "display" : "Skizofreni"
          },
          {
            "code" : "DF30",
            "display" : "Manisk enkeltepisode"
          },
          {
            "code" : "DF40",
            "display" : "Fobiske angsttilstande"
          },
          {
            "code" : "DF50",
            "display" : "Spiseforstyrrelser"
          },
          {
            "code" : "DF60",
            "display" : "Specifikke forstyrrelser af personlighedsstrukturen"
          },
          {
            "code" : "DF70",
            "display" : "Mental retardering af lettere grad"
          },
          {
            "code" : "DF80",
            "display" : "Specifikke udviklingsforstyrrelser af tale og sprog"
          },
          {
            "code" : "DF90",
            "display" : "Hyperkinetiske forstyrrelser"
          },
          {
            "code" : "DF99",
            "display" : "Ikke nærmere specificerede psykiske lidelser"
          },
          {
            "code" : "DG20",
            "display" : "Parkinsons sygdom"
          },
          {
            "code" : "DJ44",
            "display" : "Kronisk obstruktiv lungesygdom"
          },
          {
            "code" : "DI20",
            "display" : "Angina pectoris"
          },
          {
            "code" : "DI25",
            "display" : "Kronisk iskæmisk hjertesygdom"
          },
          {
            "code" : "DI50",
            "display" : "Hjertesvigt"
          },
          {
            "code" : "DZ76",
            "display" : "Personer i kontakt med sundhedsvæsenet af andre årsager"
          }
        ]
      },
      {
        "system" : "http://kl.dk/fhir/common/caresocial/CodeSystem/FSIII",
        "filter" : [
          {
            "property" : "concept",
            "op" : "is-a",
            "value" : "F"
          }
        ]
      },
      {
        "system" : "http://kl.dk/fhir/common/caresocial/CodeSystem/FSIII",
        "filter" : [
          {
            "property" : "concept",
            "op" : "is-a",
            "value" : "J1"
          }
        ]
      },
      {
        "system" : "http://kl.dk/fhir/common/caresocial/CodeSystem/FSIII",
        "filter" : [
          {
            "property" : "concept",
            "op" : "is-a",
            "value" : "J2"
          }
        ]
      },
      {
        "system" : "http://kl.dk/fhir/common/caresocial/CodeSystem/FSIII",
        "filter" : [
          {
            "property" : "concept",
            "op" : "is-a",
            "value" : "J3"
          }
        ]
      },
      {
        "system" : "http://kl.dk/fhir/common/caresocial/CodeSystem/FSIII",
        "filter" : [
          {
            "property" : "concept",
            "op" : "is-a",
            "value" : "J4"
          }
        ]
      },
      {
        "system" : "http://kl.dk/fhir/common/caresocial/CodeSystem/FSIII",
        "filter" : [
          {
            "property" : "concept",
            "op" : "is-a",
            "value" : "J5"
          }
        ]
      }
    ]
  }
}

```
