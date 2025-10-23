# MedCom Message Codes - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedCom Message Codes**

## CodeSystem: MedCom Message Codes 

| | |
| :--- | :--- |
| *Official URL*:urn:oid:1.2.208.184.100.1 | *Version*:6.0.0 |
| Active as of 2019-04-10 | *Computable Name*:MedCom Message Codes |
| *Other Identifiers:*OID:1.2.208.184.100.1 | |

 
MedCom Message Codes. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ClinicalImpressionFindingCodes](ValueSet-ehealth-clinicalimpression-finding-codes.md)
* [ReferenceRangeType](ValueSet-ehealth-reference-range-type.md)
* [DK_IHE_TypeCode_VS](ValueSet-dk-ihe-typecode-vs.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "urn-oid-1.2.208.184.100.1",
  "meta" : {
    "versionId" : "2",
    "lastUpdated" : "2021-02-08T08:14:10.892+00:00"
  },
  "url" : "urn:oid:1.2.208.184.100.1",
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:1.2.208.184.100.1"
    }
  ],
  "version" : "6.0.0",
  "name" : "MedCom Message Codes",
  "title" : "MedCom Message Codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-04-10",
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
  "description" : "MedCom Message Codes.",
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
      "code" : "RAL",
      "display" : "Terapeutiske grænseværdier for RØD alarm",
      "definition" : "Terapeutiske grænseværdier for RØD alarm",
      "designation" : [
        {
          "language" : "da",
          "value" : "Terapeutiske grænseværdier for RØD alarm"
        }
      ]
    },
    {
      "code" : "GAL",
      "display" : "Terapeutiske grænseværdier for GUL alarm",
      "definition" : "Terapeutiske grænseværdier for GUL alarm",
      "designation" : [
        {
          "language" : "da",
          "value" : "Terapeutiske grænseværdier for GUL alarm"
        }
      ]
    },
    {
      "code" : "CMR",
      "display" : "Clinical Mesurement Report",
      "definition" : "Clinical Mesurement Report"
    },
    {
      "code" : "PDC",
      "display" : "Stamkort",
      "definition" : "Personal Data Card"
    },
    {
      "code" : "MADC",
      "display" : "MADC",
      "definition" : "Graviditetskort"
    }
  ]
}

```
