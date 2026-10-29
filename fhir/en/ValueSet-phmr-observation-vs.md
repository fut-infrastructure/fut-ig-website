# MedCom PHMR Observation ValueSet - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedCom PHMR Observation ValueSet**

## ValueSet: MedCom PHMR Observation ValueSet 

| | |
| :--- | :--- |
| *Official URL*:http://medcom.dk/terminologi/phmr-observation-vs | *Version*:11.0.2 |
| Active as of 2025-05-13 | *Computable Name*:MedComPHMRObservationValueSet |

 
Value set used for Danish (DK) HL7 CDA profile PHMR-DK observation codes. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "phmr-observation-vs",
  "url" : "http://medcom.dk/terminologi/phmr-observation-vs",
  "version" : "11.0.2",
  "name" : "MedComPHMRObservationValueSet",
  "title" : "MedCom PHMR Observation ValueSet",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-05-13T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Value set used for Danish (DK) HL7 CDA profile PHMR-DK observation codes.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "urn:oid:1.2.208.176.2.1",
      "concept" : [{
        "code" : "NPU03804"
      },
      {
        "code" : "NPU19748"
      },
      {
        "code" : "NPU22089"
      },
      {
        "code" : "NPU03963"
      },
      {
        "code" : "DNK05472"
      },
      {
        "code" : "DNK05473"
      },
      {
        "code" : "NPU21692"
      },
      {
        "code" : "NPU03011"
      },
      {
        "code" : "NPU27281"
      }]
    },
    {
      "system" : "urn:oid:1.2.208.184.100.8",
      "concept" : [{
        "code" : "MCS88100"
      },
      {
        "code" : "MCS88015"
      },
      {
        "code" : "MCS88019"
      },
      {
        "code" : "MCS88020"
      },
      {
        "code" : "MCS88050"
      },
      {
        "code" : "MCS88137"
      },
      {
        "code" : "MCS88021"
      },
      {
        "code" : "MCS88214"
      }]
    }]
  }
}

```
