# Message Medium - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Message Medium**

## CodeSystem: Message Medium 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/message-medium | *Version*:6.0.0 |
| Active as of 2019-01-29 | *Computable Name*:MessageMedium |

 
Message medium types 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MessageMedium](ValueSet-message-medium.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-message-medium",
  "url" : "http://ehealth.sundhed.dk/cs/message-medium",
  "version" : "6.0.0",
  "name" : "MessageMedium",
  "title" : "Message Medium",
  "status" : "active",
  "experimental" : false,
  "date" : "2019-01-29T00:00:00+00:00",
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
  "description" : "Message medium types",
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
      "code" : "nemsms",
      "display" : "NemSMS",
      "designation" : [
        {
          "language" : "da",
          "value" : "NemSMS"
        }
      ]
    },
    {
      "code" : "eboks",
      "display" : "eBoks",
      "designation" : [
        {
          "language" : "da",
          "value" : "eBoks"
        }
      ]
    }
  ]
}

```
