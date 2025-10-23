# KLTilstandeKoderSygepleje - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **KLTilstandeKoderSygepleje**

## ValueSet: KLTilstandeKoderSygepleje 

| | |
| :--- | :--- |
| *Official URL*:http://kl.dk/fhir/common/caresocial/ValueSet/KLConditionCodesNursing | *Version*:6.0.0 |
| Active as of 2022-01-10 | *Computable Name*:KLConditionCodesNursing |

 
Danish municipality nursing condition codes 

 **References** 

* Included into [Condition_Conditions](ValueSet-ehealth-condition-conditions.md)

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
  "id" : "kl.dk-fhir-common-caresocial-ValueSet-KLConditionCodesNursing",
  "url" : "http://kl.dk/fhir/common/caresocial/ValueSet/KLConditionCodesNursing",
  "version" : "6.0.0",
  "name" : "KLConditionCodesNursing",
  "title" : "KLTilstandeKoderSygepleje",
  "status" : "active",
  "date" : "2022-01-10T11:49:35+00:00",
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
  "description" : "Danish municipality nursing condition codes",
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
        "system" : "http://kl.dk/fhir/common/caresocial/CodeSystem/FSIII",
        "concept" : [
          {
            "code" : "I9.1"
          },
          {
            "code" : "I4.9"
          },
          {
            "code" : "I7.2"
          },
          {
            "code" : "I10.1"
          },
          {
            "code" : "I6.2"
          },
          {
            "code" : "I11.4"
          },
          {
            "code" : "I9.3"
          },
          {
            "code" : "I6.4"
          },
          {
            "code" : "I9.2"
          },
          {
            "code" : "I12.1"
          },
          {
            "code" : "I4.5"
          },
          {
            "code" : "I4.7"
          },
          {
            "code" : "I4.3"
          },
          {
            "code" : "I1.2"
          },
          {
            "code" : "I4.2"
          },
          {
            "code" : "I3.2"
          },
          {
            "code" : "I9.5"
          },
          {
            "code" : "I11.1"
          },
          {
            "code" : "I9.7"
          },
          {
            "code" : "I11.2"
          },
          {
            "code" : "I4.1"
          },
          {
            "code" : "I5.1"
          },
          {
            "code" : "I9.4"
          },
          {
            "code" : "I12.4"
          },
          {
            "code" : "I6.3"
          },
          {
            "code" : "I2.1"
          },
          {
            "code" : "I3.4"
          },
          {
            "code" : "I1.1"
          },
          {
            "code" : "I8.1"
          },
          {
            "code" : "I9.8"
          },
          {
            "code" : "I6.1"
          },
          {
            "code" : "I11.3"
          },
          {
            "code" : "I9.6"
          },
          {
            "code" : "I4.8"
          },
          {
            "code" : "I4.4"
          },
          {
            "code" : "I3.5"
          },
          {
            "code" : "I12.3"
          },
          {
            "code" : "I12.2"
          },
          {
            "code" : "I4.6"
          },
          {
            "code" : "I3.1"
          },
          {
            "code" : "I7.1"
          },
          {
            "code" : "I10.2"
          },
          {
            "code" : "I3.3"
          }
        ]
      }
    ]
  }
}

```
