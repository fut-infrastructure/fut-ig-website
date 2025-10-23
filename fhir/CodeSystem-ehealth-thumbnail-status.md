# Thumbnail status - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Thumbnail status**

## CodeSystem: Thumbnail status 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/thumbnail-status | *Version*:6.0.0 |
| Active as of 2024-10-28 | *Computable Name*:ThumbnailStatus |

 
Thumbnail status is a code system for the status of low resolution media representations. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ThumbnailStatus](ValueSet-ehealth-thumbnail-status.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-thumbnail-status",
  "url" : "http://ehealth.sundhed.dk/cs/thumbnail-status",
  "version" : "6.0.0",
  "name" : "ThumbnailStatus",
  "title" : "Thumbnail status",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-10-28T00:00:00+00:00",
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
  "description" : "Thumbnail status is a code system for the status of low resolution media representations.",
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
      "code" : "ready",
      "display" : "Ready",
      "definition" : "The thumbnail has been generated and is ready for use"
    },
    {
      "code" : "requested",
      "display" : "Requested",
      "definition" : "A thumbnail generation has been requested"
    },
    {
      "code" : "rejected",
      "display" : "Rejected",
      "definition" : "The thumbnail generation has been rejected"
    },
    {
      "code" : "failed",
      "display" : "Failed",
      "definition" : "The thumbnail generation has failed"
    }
  ]
}

```
