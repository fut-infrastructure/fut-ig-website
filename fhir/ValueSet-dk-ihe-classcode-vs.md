# DK_IHE_ClassCode_VS - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK_IHE_ClassCode_VS**

## ValueSet: DK_IHE_ClassCode_VS 

| | |
| :--- | :--- |
| *Official URL*:http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-classcode-vs | *Version*:6.0.0 |
| Active as of 2019-12-11 | *Computable Name*:DK_IHE_ClassCode_VS |

 
Value set for the classCode attribute. 

 **References** 

* Included into [DocumentClass](ValueSet-ehealth-document-class.md)

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
  "id" : "dk-ihe-classcode-vs",
  "url" : "http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-classcode-vs",
  "version" : "6.0.0",
  "name" : "DK_IHE_ClassCode_VS",
  "title" : "DK_IHE_ClassCode_VS",
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
  "description" : "Value set for the classCode attribute.",
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
        "system" : "urn:oid:1.2.208.184.100.9",
        "concept" : [
          {
            "code" : "001",
            "display" : "Klinisk rapport"
          }
        ]
      }
    ]
  }
}

```
