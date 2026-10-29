# Media modality - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Media modality**

## ValueSet: Media modality 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/media-modality | *Version*:11.0.2 |
| Active as of 2024-10-21 | *Computable Name*:MediaModality |

 
Media modality 

 **References** 

* [ehealth-media](StructureDefinition-ehealth-media.md)

### Logical Definition (CLD)

 

### Expansion

No Expansion for this valueset (not supported by Publication Tooling)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-media-modality",
  "url" : "http://ehealth.sundhed.dk/vs/media-modality",
  "version" : "11.0.2",
  "name" : "MediaModality",
  "title" : "Media modality",
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
  "description" : "Media modality",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "valueSet" : ["http://hl7.org/fhir/ValueSet/media-modality"]
    }]
  }
}

```
