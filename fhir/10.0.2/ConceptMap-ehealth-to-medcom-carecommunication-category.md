# eHealth to MedCom CareCommunication Category Map - eHealth Infrastructure v10.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **eHealth to MedCom CareCommunication Category Map**

## ConceptMap: eHealth to MedCom CareCommunication Category Map 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cm/ehealth-to-medcom-carecommunication-category | *Version*:10.0.2 |
| Active as of 2026-09-10 | *Computable Name*: |



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ehealth-to-medcom-carecommunication-category",
  "url" : "http://ehealth.sundhed.dk/cm/ehealth-to-medcom-carecommunication-category",
  "version" : "10.0.2",
  "title" : "eHealth to MedCom CareCommunication Category Map",
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
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "group" : [{
    "source" : "http://ehealth.sundhed.dk/cs/ehealth-carecommunication-category",
    "target" : "http://medcomfhir.dk/ig/terminology/ValueSet/medcom-careCommunication-categories",
    "element" : [{
      "code" : "alcohol-and-drug-treatment",
      "target" : [{
        "code" : "alcohol-and-drug-treatment",
        "display" : "Alcohol and drug treatment",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "assistive-devices",
      "target" : [{
        "code" : "assistive-devices",
        "display" : "Assistive technology",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "carecoordination",
      "target" : [{
        "code" : "carecoordination",
        "display" : "Care Coordination",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "decease",
      "target" : [{
        "code" : "decease",
        "display" : "Decease",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "discharge",
      "target" : [{
        "code" : "discharge",
        "display" : "Discharge",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "examination-results",
      "target" : [{
        "code" : "examination-results",
        "display" : "Examination Results",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "healthcare",
      "target" : [{
        "code" : "healthcare",
        "display" : "Healthcare",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "home-care-assessment",
      "target" : [{
        "code" : "home-care-assessment",
        "display" : "Home care assessment",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "medicine",
      "target" : [{
        "code" : "medicine",
        "display" : "Medicine",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "nursing",
      "target" : [{
        "code" : "nursing",
        "display" : "Nursing",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "outpatient",
      "target" : [{
        "code" : "outpatient",
        "display" : "Outpatient",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "psychiatry-social-disability",
      "target" : [{
        "code" : "psychiatry-social-disability",
        "display" : "Psychiatry, Social, Disability",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "regarding-referral",
      "target" : [{
        "code" : "regarding-referral",
        "display" : "Regarding Referral",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "telemedicine",
      "target" : [{
        "code" : "telemedicine",
        "display" : "Telemedicine",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "training",
      "target" : [{
        "code" : "training",
        "display" : "Training",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "acute-ambulant",
      "target" : [{
        "code" : "acute-ambulant",
        "display" : "Acute ambulant",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "extended-care-responsibility",
      "target" : [{
        "code" : "extended-care-responsibility",
        "display" : "Extended care responsibility",
        "equivalence" : "relatedto"
      }]
    },
    {
      "code" : "other",
      "target" : [{
        "code" : "other",
        "display" : "Other",
        "equivalence" : "relatedto"
      }]
    }]
  }]
}

```
