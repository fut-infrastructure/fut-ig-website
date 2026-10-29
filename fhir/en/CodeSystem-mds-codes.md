# International Parkinson and Movement Disorder Society (MDS) Codes - eHealth Infrastructure v11.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **International Parkinson and Movement Disorder Society (MDS) Codes**

## CodeSystem: International Parkinson and Movement Disorder Society (MDS) Codes 

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/cs/mds-codes | *Version*:11.0.3 |
| Active as of 2026-10-29 | *Computable Name*:MDSCodes |
| **Copyright/Legal**: Copyright © (2026) International Parkinson and Movement Disorder Society (MDS). All rights reserved. Adapted and used with permission of MDS. This derivative of the MDS-Unified Parkinson's Disease Rating Scale ("MDS-UPDRS") has not been validated or tested for reliability | |

 
MDS Codes by Christopher G. Goetz, MD and Nancy LaPelle, PhD 

This Code system is referenced in the definition of the following value sets:

* [Observation Codes](ValueSet-ehealth-observation-codes.md)

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "mds-codes",
  "url" : "http://ehealth.sundhed.dk/cs/mds-codes",
  "version" : "11.0.3",
  "name" : "MDSCodes",
  "title" : "International Parkinson and Movement Disorder Society (MDS) Codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-10-29T00:00:00+00:00",
  "publisher" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
  "contact" : [{
    "name" : "Den telemedicinske infrastruktur (eHealth Infrastructure)",
    "telecom" : [{
      "system" : "url",
      "value" : "http://ehealth.sundhed.dk"
    }]
  }],
  "description" : "MDS Codes by Christopher G. Goetz, MD and Nancy LaPelle, PhD",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "copyright" : "Copyright © (2026) International Parkinson and Movement Disorder Society (MDS). All rights reserved.\nAdapted and used with permission of MDS. This derivative of the MDS-Unified Parkinson's Disease Rating Scale (\"MDS-UPDRS\") has not been validated or tested for reliability",
  "caseSensitive" : true,
  "content" : "fragment",
  "concept" : [{
    "code" : "MDS-UPDRS-I",
    "display" : "MDS - UPDRS-I",
    "designation" : [{
      "language" : "da",
      "value" : "MDS - UPDRS-I"
    }]
  },
  {
    "code" : "MDS-UPDRS-IA",
    "display" : "MDS - UPDRS-IA",
    "designation" : [{
      "language" : "da",
      "value" : "MDS - UPDRS-IA"
    }]
  },
  {
    "code" : "MDS-UPDRS-IB",
    "display" : "MDS - UPDRS-IB",
    "designation" : [{
      "language" : "da",
      "value" : "MDS - UPDRS-IB"
    }]
  },
  {
    "code" : "MDS-UPDRS-II",
    "display" : "MDS - UPDRS-II",
    "designation" : [{
      "language" : "da",
      "value" : "MDS - UPDRS-II"
    }]
  },
  {
    "code" : "MDS-UPDRS-III",
    "display" : "MDS - UPDRS-III",
    "designation" : [{
      "language" : "da",
      "value" : "MDS - UPDRS-III"
    }]
  },
  {
    "code" : "MDS-UPDRS-IV",
    "display" : "MDS - UPDRS-IV",
    "designation" : [{
      "language" : "da",
      "value" : "MDS - UPDRS-IV"
    }]
  }]
}

```
