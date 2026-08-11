# Get media data - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Get media data**

## OperationDefinition: Get media data 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/fhir/OperationDefinition/Media-t-get-data | *Version*:10.0.1 |
| Active as of 2026-08-11 | *Computable Name*:get-data |

 
The get-data operation returns a media content matching the uuid provided. 

### Parameter description

 
* uuid: The uuid of the media to return
 

### Request header description

 
* ehealth-thumbnail-size: The size of thumbnail to return instead of original content. If thumbnails are not supported for the media, the original content is returned
 

### Output description

 
The result of this operation returns a Binary containing the media found from the provided uuid 



## Resource Content

```json
{
  "resourceType" : "OperationDefinition",
  "id" : "Media-t-get-data",
  "url" : "http://ehealth.sundhed.dk/fhir/OperationDefinition/Media-t-get-data",
  "version" : "10.0.1",
  "name" : "get-data",
  "title" : "Get media data",
  "status" : "active",
  "kind" : "operation",
  "date" : "2026-08-11T06:32:53+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "The get-data operation returns a media content matching the uuid provided.\n\n\n### Parameter description\n- uuid: The uuid of the media to return\n\n\n### Request header description\n- ehealth-thumbnail-size: The size of thumbnail to return instead of original content. If thumbnails are not supported for the media, the original content is returned\n\n\n### Output description\nThe result of this operation returns a Binary containing the media found from the provided uuid",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "affectsState" : false,
  "code" : "get-data",
  "resource" : ["Media"],
  "system" : false,
  "type" : true,
  "instance" : false,
  "parameter" : [{
    "name" : "uuid",
    "use" : "in",
    "min" : 0,
    "max" : "1",
    "documentation" : "Get media data matching the UUID provided",
    "type" : "string"
  }]
}

```
