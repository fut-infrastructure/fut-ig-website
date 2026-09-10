# eHealth CareCommunication Attachment MIME Types - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth CareCommunication Attachment MIME Types**

## ValueSet: eHealth CareCommunication Attachment MIME Types 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-carecommunication-mimetypes | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*:EhealthCareCommunicationMimeTypesVS |

 
Allowed MIME types for attachments in eHealth CareCommunication messages. Mirrors MedCom's medcom-core-attachmentMimeTypes ValueSet. 

 **References** 

* [ehealth-carecommunication](StructureDefinition-ehealth-carecommunication.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-carecommunication-mimetypes",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-carecommunication-mimetypes",
  "version" : "10.0.2",
  "name" : "EhealthCareCommunicationMimeTypesVS",
  "title" : "eHealth CareCommunication Attachment MIME Types",
  "status" : "active",
  "date" : "2026-09-10T10:04:36+00:00",
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
