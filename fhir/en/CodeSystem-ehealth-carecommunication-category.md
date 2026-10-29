# eHealth CareCommunication Category codes - eHealth Infrastructure v11.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth CareCommunication Category codes**

## CodeSystem: eHealth CareCommunication Category codes 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/ehealth-carecommunication-category | *Version*:11.0.2 |
| Active as of 2026-10-29 | *Computable Name*:EhealthCareCommunicationCategoryCS |

 
The set of CareCommunication category code. 

This Code system is referenced in the definition of the following value sets:

* [eHealth CareCommunication Categories](ValueSet-ehealth-carecommunication-category.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ehealth-carecommunication-category",
  "url" : "http://ehealth.sundhed.dk/cs/ehealth-carecommunication-category",
  "version" : "11.0.2",
  "name" : "EhealthCareCommunicationCategoryCS",
  "title" : "eHealth CareCommunication Category codes",
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
  "description" : "The set of CareCommunication category code.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "content" : "complete",
  "count" : 18,
  "concept" : [{
    "code" : "alcohol-and-drug-treatment",
    "display" : "Alcohol and drug treatment"
  },
  {
    "code" : "assistive-devices",
    "display" : "Assistive technology"
  },
  {
    "code" : "carecoordination",
    "display" : "Care Coordination"
  },
  {
    "code" : "decease",
    "display" : "Decease"
  },
  {
    "code" : "discharge",
    "display" : "Discharge"
  },
  {
    "code" : "examination-results",
    "display" : "Examination Results"
  },
  {
    "code" : "healthcare",
    "display" : "Healthcare"
  },
  {
    "code" : "home-care-assessment",
    "display" : "Home care assessment"
  },
  {
    "code" : "medicine",
    "display" : "Medicine"
  },
  {
    "code" : "nursing",
    "display" : "Nursing"
  },
  {
    "code" : "outpatient",
    "display" : "Outpatient"
  },
  {
    "code" : "psychiatry-social-disability",
    "display" : "Psychiatry, Social, Disability"
  },
  {
    "code" : "regarding-referral",
    "display" : "Regarding Referral"
  },
  {
    "code" : "telemedicine",
    "display" : "Telemedicine"
  },
  {
    "code" : "training",
    "display" : "Training"
  },
  {
    "code" : "acute-ambulant",
    "display" : "Acute ambulant"
  },
  {
    "code" : "extended-care-responsibility",
    "display" : "Extended care responsibility"
  },
  {
    "code" : "other",
    "display" : "Other"
  }]
}

```
