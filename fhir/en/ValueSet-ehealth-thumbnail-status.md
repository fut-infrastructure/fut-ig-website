# Thumbnail Status - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Thumbnail Status**

## ValueSet: Thumbnail Status 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/thumbnail-status | *Version*:11.0.3 |
| Active as of 2024-10-28 | *Computable Name*:ThumbnailStatus |

 
Thumbnail status is a value set for the status of low resolution media representations. 

 **References** 

* [Media Thumbnail representation](StructureDefinition-ehealth-media-thumbnail.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-thumbnail-status",
  "url" : "http://ehealth.sundhed.dk/vs/thumbnail-status",
  "version" : "11.0.3",
  "name" : "ThumbnailStatus",
  "title" : "Thumbnail Status",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-10-28T10:02:00+02:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Thumbnail status is a value set for the status of low resolution media representations.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/thumbnail-status"
    }]
  }
}

```
