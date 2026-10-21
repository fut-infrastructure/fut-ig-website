# Thumbnail Size Category - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Thumbnail Size Category**

## ValueSet: Thumbnail Size Category 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/thumbnail-size-category | *Version*:11.0.0 |
| Active as of 2024-10-28 | *Computable Name*:ThumbnailSizeCategory |

 
Thumbnail size is a value set with the available sizes of low resolution media representations. 

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
  "id" : "ehealth-thumbnail-size-category",
  "url" : "http://ehealth.sundhed.dk/vs/thumbnail-size-category",
  "version" : "11.0.0",
  "name" : "ThumbnailSizeCategory",
  "title" : "Thumbnail Size Category",
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
  "description" : "Thumbnail size is a value set with the available sizes of low resolution media representations.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/thumbnail-size-category"
    }]
  }
}

```
