# Media view - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Media view**

## ValueSet: Media view 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/media-view | *Version*:11.0.3 |
| Active as of 2024-10-21 | *Computable Name*:MediaView |

 
Media view 

 **References** 

* [ehealth-media](StructureDefinition-ehealth-media.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-media-view",
  "url" : "http://ehealth.sundhed.dk/vs/media-view",
  "version" : "11.0.3",
  "name" : "MediaView",
  "title" : "Media view",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-10-21T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Media view",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "valueSet" : ["http://hl7.org/fhir/ValueSet/media-view"]
    }]
  }
}

```
