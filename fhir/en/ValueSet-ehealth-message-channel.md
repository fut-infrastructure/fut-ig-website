# eHealth Message Channel - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth Message Channel**

## ValueSet: eHealth Message Channel 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/ehealth-message-channel | *Version*:11.0.2 |
| Active as of 2026-10-29 | *Computable Name*:EhealthMessageChannelVS |

 
ValueSet for message channel codes. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ehealth-message-channel",
  "url" : "http://ehealth.sundhed.dk/vs/ehealth-message-channel",
  "version" : "11.0.2",
  "name" : "EhealthMessageChannelVS",
  "title" : "eHealth Message Channel",
  "status" : "active",
  "date" : "2026-10-29T09:18:06+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "ValueSet for message channel codes.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-message-channel"
    }]
  }
}

```
