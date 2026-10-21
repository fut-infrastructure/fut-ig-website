# DK_IHE_ClassCode_VS - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK_IHE_ClassCode_VS**

## ValueSet: DK_IHE_ClassCode_VS 

| | |
| :--- | :--- |
| *Official URL*:http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-classcode-vs | *Version*:11.0.0 |
| Active as of 2019-12-11 | *Computable Name*:DK_IHE_ClassCode_VS |

 
Value set for the classCode attribute. 

 **References** 

* Included into [Document Class](ValueSet-ehealth-document-class.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "dk-ihe-classcode-vs",
  "url" : "http://sundhedsdatastyrelsen.dk/terminologi/dk-ihe-classcode-vs",
  "version" : "11.0.0",
  "name" : "DK_IHE_ClassCode_VS",
  "title" : "DK_IHE_ClassCode_VS",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-12-11T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set for the classCode attribute.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "urn:oid:1.2.208.184.100.9",
      "concept" : [{
        "code" : "001",
        "display" : "Klinisk rapport"
      }]
    }]
  }
}

```
