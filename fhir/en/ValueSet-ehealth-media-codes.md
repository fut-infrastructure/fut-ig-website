# Media Codes - eHealth Infrastructure v11.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Media Codes**

## ValueSet: Media Codes 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/media-codes | *Version*:11.0.1 |
| Active as of 2025-01-09 | *Computable Name*:MediaCodes |

 
Media codes value set 

 **References** 

* Included into [Activity Definition Code](ValueSet-ehealth-activitydefinition-code.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-media-codes",
  "url" : "http://ehealth.sundhed.dk/vs/media-codes",
  "version" : "11.0.1",
  "name" : "MediaCodes",
  "title" : "Media Codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-01-09T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Media codes value set",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "446080005",
        "display" : "Photography of wound"
      }]
    },
    {
      "system" : "urn:oid:1.2.208.176.2.4",
      "concept" : [{
        "code" : "ZZ7011",
        "display" : "Klinisk foto"
      }]
    }]
  }
}

```
