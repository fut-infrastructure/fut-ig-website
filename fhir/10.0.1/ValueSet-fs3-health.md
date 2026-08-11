# FS III, helbredstilstande - eHealth Infrastructure v10.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **FS III, helbredstilstande**

## ValueSet: FS III, helbredstilstande (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/vs/fs3-health | *Version*:10.0.1 |
| Active as of 2019-02-08 | *Computable Name*:FS III, helbredstilstande |

 
FS III, helbredstilstande 

 **References** 

* [General health condition](StructureDefinition-ehealth-general-health-condition.md)

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
  "id" : "fs3-health",
  "url" : "http://ehealth.sundhed.dk/vs/fs3-health",
  "version" : "10.0.1",
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
