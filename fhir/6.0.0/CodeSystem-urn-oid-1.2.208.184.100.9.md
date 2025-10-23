# DK IHE ClassCode CS - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK IHE ClassCode CS**

## CodeSystem: DK IHE ClassCode CS 

| | |
| :--- | :--- |
| *Official URL*:urn:oid:1.2.208.184.100.9 | *Version*:6.0.0 |
| Active as of 2019-12-11 | *Computable Name*:DK_IHE_ClassCode_CS |
| *Other Identifiers:*OID:1.2.208.184.100.9 | |

 
Code system for the classCode attribute 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DK_IHE_ClassCode_VS](ValueSet-dk-ihe-classcode-vs.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "urn-oid-1.2.208.184.100.9",
  "url" : "urn:oid:1.2.208.184.100.9",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:1.2.208.184.100.9"
    }
  ],
  "version" : "6.0.0",
  "name" : "DK_IHE_ClassCode_CS",
  "title" : "DK IHE ClassCode CS",
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
  "description" : "Code system for the classCode attribute",
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
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "001",
      "display" : "Klinisk rapport",
      "definition" : "Clinical report document classcode used in DK-IHE metadata."
    },
    {
      "code" : "002",
      "display" : "Personal information about"
    },
    {
      "code" : "003",
      "display" : "Planning"
    },
    {
      "code" : "004",
      "display" : "Questionnaires"
    }
  ]
}

```
