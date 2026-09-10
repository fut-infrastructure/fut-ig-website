# Media usage mode - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Media usage mode**

## CodeSystem: Media usage mode 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/media-usage-mode | *Version*:10.0.2 |
| Active as of 2024-10-28 | *Computable Name*:mediaUsageMode |

 
Identifies the what the media resource is used for. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Media Usage Mode](ValueSet-ehealth-media-usage-mode.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-media-usage-mode",
  "url" : "http://ehealth.sundhed.dk/cs/media-usage-mode",
  "version" : "10.0.2",
  "name" : "mediaUsageMode",
  "title" : "Media usage mode",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-10-28T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "Identifies the what the media resource is used for.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [{
    "code" : "raw",
    "display" : "Raw",
    "definition" : "Raw",
    "designation" : [{
      "language" : "da",
      "value" : "Original"
    }]
  },
  {
    "code" : "overlay",
    "display" : "Overlay",
    "definition" : "Overlay",
    "designation" : [{
      "language" : "da",
      "value" : "Overlay"
    }]
  },
  {
    "code" : "metadata",
    "display" : "Metadata",
    "definition" : "Metadata",
    "designation" : [{
      "language" : "da",
      "value" : "Metadata"
    }]
  }]
}

```
