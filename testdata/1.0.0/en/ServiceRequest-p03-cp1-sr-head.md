# Head activity (scheduled) — completed - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Head activity (scheduled) — completed**

## Example ServiceRequest: Head activity (scheduled) — completed

Profile: [ehealth-servicerequest](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-servicerequest.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**Episode of care**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = finished; period = 2025-08-04 09:00:00+0000 --> 2025-12-15 12:00:00+0000](EpisodeOfCare-p03-eoc1.md)

**Sharing policy**: Sharing is allowed destination national health data

**includeAsExtra**: false

**triggerEnablementCode**: NO_TRIGGER

> **ServiceRequest status history**
* status: Completed
* period: 2025-08-04 09:05:00+0000 --> (ongoing)

**instantiatesCanonical**: [Målinger og spørgeskema](ActivityDefinition-ad-head.md)

**status**: Completed

**intent**: Order

**code**: Head activity

**subject**: [Mette Kristensen (official) Female, DoB: 1958-12-24 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#2412589206 (use: official))](Patient-p03.md)

**occurrence**: Duration 4?? , Once



## Resource Content

```json
{
  "resourceType" : "ServiceRequest",
  "id" : "p03-cp1-sr-head",
  "meta" : {
    "profile" : ["http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest"],
    "tag" : [{
      "system" : "http://ehealth.sundhed.dk/cs/ehealth-system",
      "code" : "${COEXISTENCE_TAG}"
    }]
  },
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/workflow-episodeOfCare",
    "valueReference" : {
      "reference" : "EpisodeOfCare/p03-eoc1"
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-sharingPolicy",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://ehealth.sundhed.dk/cs/measurement-sharing-policies",
        "code" : "sharingAllowedDestinationNationalHealthData"
      }]
    }
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-include-as-extra",
    "valueBoolean" : false
  },
  {
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-trigger-enablement-code",
    "valueCode" : "NO_TRIGGER"
  },
  {
    "extension" : [{
      "url" : "status",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://hl7.org/fhir/request-status",
          "code" : "completed"
        }]
      }
    },
    {
      "url" : "period",
      "valuePeriod" : {
        "start" : "2025-08-04T09:05:00+00:00"
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest-statusHistory"
  }],
  "instantiatesCanonical" : ["http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-head"],
  "status" : "completed",
  "intent" : "order",
  "code" : {
    "coding" : [{
      "system" : "http://ehealth.sundhed.dk/cs/activitydefinition-code",
      "code" : "HA"
    }]
  },
  "subject" : {
    "reference" : "Patient/p03"
  },
  "occurrenceTiming" : {
    "repeat" : {
      "boundsPeriod" : {
        "start" : "2025-08-04T09:05:00+00:00",
        "end" : "2025-12-15T11:55:00+00:00"
      },
      "duration" : 4,
      "durationUnit" : "h",
      "frequency" : 1,
      "dayOfWeek" : ["mon", "wed", "fri"],
      "timeOfDay" : ["08:00:00"]
    }
  }
}

```
