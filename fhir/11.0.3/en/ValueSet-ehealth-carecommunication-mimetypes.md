# eHealth CareCommunication Attachment MIME Types - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth CareCommunication Attachment MIME Types**

## ValueSet: eHealth CareCommunication Attachment MIME Types 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-carecommunication-mimetypes | *Version*:11.0.3 |
| Active as of 2026-10-29 | *Computable Name*:EhealthCareCommunicationMimeTypesVS |

 
Allowed MIME types for attachments in eHealth CareCommunication messages. Mirrors MedCom's medcom-core-attachmentMimeTypes ValueSet. 

 **References** 

* [ehealth-carecommunication](StructureDefinition-ehealth-carecommunication.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-carecommunication-mimetypes",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-carecommunication-mimetypes",
  "version" : "11.0.3",
  "name" : "EhealthCareCommunicationMimeTypesVS",
  "title" : "eHealth CareCommunication Attachment MIME Types",
  "status" : "active",
  "date" : "2026-10-29T11:45:20+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Allowed MIME types for attachments in eHealth CareCommunication messages. Mirrors MedCom's medcom-core-attachmentMimeTypes ValueSet.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "urn:ietf:bcp:13",
      "concept" : [{
        "code" : "application/pdf",
        "display" : "application/pdf"
      },
      {
        "code" : "image/gif",
        "display" : "image/gif"
      },
      {
        "code" : "image/jpeg",
        "display" : "image/jpeg"
      },
      {
        "code" : "image/png",
        "display" : "image/png"
      },
      {
        "code" : "image/tiff",
        "display" : "image/tiff"
      },
      {
        "code" : "image/bmp",
        "display" : "image/bmp"
      }]
    }]
  }
}

```
