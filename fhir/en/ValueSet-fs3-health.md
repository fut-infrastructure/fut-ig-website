# FS III, helbredstilstande - eHealth Infrastructure v11.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FS III, helbredstilstande**

## ValueSet: (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/fs3-health | *Version*:11.0.0 |
| Active as of 2019-02-08 | *Computable Name*:FS III, helbredstilstande |

 
FS III, helbredstilstande 

 **References** 

* [General health condition](StructureDefinition-ehealth-general-health-condition.md)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "fs3-health",
  "url" : "http://ehealth.sundhed.dk/vs/fs3-health",
  "version" : "11.0.0",
  "name" : "FS III, helbredstilstande",
  "status" : "active",
  "experimental" : true,
  "date" : "2019-02-08T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "FS III, helbredstilstande",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "compose" : {
    "include" : [{
      "system" : "http://ehealth.sundhed.dk/cs/fs3-health-function-level"
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/fs3-health-musculoskeletal"
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/fs3-health-nutrition"
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/fs3-health-skin-and-mucous-membranes"
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/fs3-health-communication"
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/fs3-health-psychosocial-conditions"
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/fs3-health-respiration-and-circulation"
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/fs3-health-sexuality"
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/fs3-health-pain-and-sensory-impressions"
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/fs3-health-sleep-and-rest"
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/fs3-health-knowledge-and-development"
    },
    {
      "system" : "http://ehealth.sundhed.dk/cs/fs3-health-excretion-of-waste-materials"
    }]
  }
}

```
