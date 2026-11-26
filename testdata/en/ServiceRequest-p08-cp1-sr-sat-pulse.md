# Saturation and pulse device group (scheduled) - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Saturation and pulse device group (scheduled)**

## Example ServiceRequest: Saturation and pulse device group (scheduled)

Profile: [ehealth-servicerequest](http://ehealth.sundhed.dk/fhir/11.0.5/StructureDefinition-ehealth-servicerequest.html)

Tag: [${COEXISTENCE_TAG} (Details: EhealthSystem code ${COEXISTENCE_TAG})](Bundle-loader-codesystems.md)

**Episode of care**: [EpisodeOfCare: extension = ->Region Nordjylland (region) (urn:oid:1.2.208.176.1.1#Sundhedsvæsenets Organisationsregister (SOR)#6071000016008 (use: official, period: 2007-08-29 00:00:00+0000 --> (ongoing))),,; status = active; period = 2026-09-29 09:00:00+0000 --> (ongoing)](EpisodeOfCare-p08-eoc1.md)

**Sharing policy**: Sharing is allowed destination national health data

**includeAsExtra**: false

**triggerEnablementCode**: NO_TRIGGER

> **ServiceRequest status history**
* status: Active
* period: 2026-09-29 09:05:00+0000 --> (ongoing)

**instantiatesCanonical**: [Iltmætning og pulsmåling](ActivityDefinition-ad-sat-pulse.md)

**status**: Active

**intent**: Order

**code**: Same device group

**subject**: [Line Sørensen (official) Female, DoB: 1954-12-15 ( urn:oid:1.2.208.176.1.2#DK Central Person Registry (CPR)#1512543258 (use: official))](Patient-p08.md)

**occurrence**: Duration 4?? , Once



## Resource Content

```json
{
  "resourceType" : "ServiceRequest",
  "id" : "p08-cp1-sr-sat-pulse",
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
      "reference" : "EpisodeOfCare/p08-eoc1"
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
          "code" : "active"
        }]
      }
    },
    {
      "url" : "period",
      "valuePeriod" : {
        "start" : "2026-09-29T09:05:00+00:00"
      }
    }],
    "url" : "http://ehealth.sundhed.dk/fhir/StructureDefinition/ehealth-servicerequest-statusHistory"
  }],
  "instantiatesCanonical" : ["http://ehealth.sundhed.dk/testdata/ActivityDefinition/ad-sat-pulse"],
  "status" : "active",
  "intent" : "order",
  "code" : {
    "coding" : [{
      "system" : "http://ehealth.sundhed.dk/cs/activitydefinition-code",
      "code" : "SDG"
    }]
  },
  "subject" : {
    "reference" : "Patient/p08"
  },
  "occurrenceTiming" : {
    "repeat" : {
      "boundsPeriod" : {
        "start" : "2026-09-29T09:05:00+00:00",
        "end" : "2099-12-31T23:00:00+00:00"
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
