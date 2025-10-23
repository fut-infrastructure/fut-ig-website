# Episode Of Care Status - eHealth Infrastructure v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Episode Of Care Status**

## CodeSystem: Episode Of Care Status 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org/fhir/episode-of-care-status | *Version*:6.0.0 | |
| *Standards status:*[Trial-use](http://hl7.org/fhir/R4/versions.html#std-process) | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 2 | *Computable Name*:EpisodeOfCareStatus |

 
The status of the episode of care. 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem Supplement is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

This code system supplement `http://hl7.org/fhir/episode-of-care-status` defines displays on the following codes:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "hl7.org-fhir-episode-of-care-status",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-wg",
      "valueCode" : "pa"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-standards-status",
      "valueCode" : "trial-use"
    },
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
      "valueInteger" : 2
    }
  ],
  "url" : "http://hl7.org/fhir/episode-of-care-status",
  "version" : "6.0.0",
  "name" : "EpisodeOfCareStatus",
  "title" : "Episode Of Care Status",
  "status" : "active",
  "experimental" : false,
  "date" : "2021-10-27T13:27:27+00:00",
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
  "description" : "The status of the episode of care.",
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
  "content" : "supplement",
  "supplements" : "http://hl7.org/fhir/episode-of-care-status",
  "concept" : [
    {
      "code" : "planned",
      "display" : "Planned",
      "definition" : "This episode of care is planned to start at the date specified in the period.start. During this status, an organization may perform assessments to determine if the patient is eligible to receive services, or be organizing to make resources available to provide care services.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Planlagt"
        }
      ]
    },
    {
      "code" : "waitlist",
      "display" : "Waitlist",
      "definition" : "This episode has been placed on a waitlist, pending the episode being made active (or cancelled).",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Venteliste"
        }
      ]
    },
    {
      "code" : "active",
      "display" : "Active",
      "definition" : "This episode of care is current.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Aktiv"
        }
      ]
    },
    {
      "code" : "onhold",
      "display" : "On Hold",
      "definition" : "This episode of care is on hold, the organization has limited responsibility for the patient (such as while on respite).",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Pauseret"
        }
      ]
    },
    {
      "code" : "finished",
      "display" : "Finished",
      "definition" : "This episode of care is finished and the organization is not expecting to be providing further care to the patient. Can also be known as \"closed\", \"completed\" or other similar terms.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Færdig"
        }
      ]
    },
    {
      "code" : "cancelled",
      "display" : "Cancelled",
      "definition" : "The episode of care was cancelled, or withdrawn from service, often selected during the planned stage as the patient may have gone elsewhere, or the circumstances have changed and the organization is unable to provide the care. It indicates that services terminated outside the planned/expected workflow.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Annulleret"
        }
      ]
    },
    {
      "code" : "entered-in-error",
      "display" : "Entered in Error",
      "definition" : "This instance should not have been part of this patient's medical record.",
      "designation" : [
        {
          "language" : "da",
          "use" : {
            "system" : "http://snomed.info/sct",
            "code" : "900000000000013009"
          },
          "value" : "Fejlindtastning"
        }
      ]
    }
  ]
}

```
